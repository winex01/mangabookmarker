<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MangaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MangaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MangaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    use \App\Http\Controllers\Admin\Operations\ForceDeleteOperation;
    use \App\Http\Controllers\Admin\Operations\ForceBulkDeleteOperation;
    use \Backpack\ReviseOperation\ReviseOperation;
    use \App\Http\Controllers\Admin\Operations\ExportOperation;
    use \App\Http\Controllers\Admin\Traits\CrudExtendTrait;
    
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;
    use \App\Http\Controllers\Admin\Traits\Fetch\FetchMangaTypeTrait; 
    use \App\Http\Controllers\Admin\Traits\Fetch\FetchAuthorTrait; 
    use \App\Http\Controllers\Admin\Traits\Fetch\FetchTagTrait; 
    
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Manga::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/manga');

        $this->userPermissions();
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->showColumns();
        $this->showRelationshipPivotColumn('authors')->afterColumn('title');
        $this->showRelationshipPivotColumn('tags')->afterColumn('authors');
        $this->showRelationshipColumn('manga_type_id');

        // photo
        $this->crud->modifyColumn('photo', [
            'type'   => 'image',
            'height' => '50px',
            'width'  => '40px',
            'orderable' => false,
        ]);
        
        // limit column length so it wont destroy table column arrangement,
        // if it's too long the authors/any pivot column wont whow in correct order in list
        $this->limitColumn('alternative_name', 100);
    }

    protected function setupShowOperation()
    {
        $this->crud->set('show.setFromDb', false); // remove fk column such as: gender_id
        $this->setupListOperation();

        // photo
        $this->crud->modifyColumn('photo', [
            'height' => '300px',
            'width'  => '200px',
        ]);

        $this->limitColumn('alternative_name', null);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MangaRequest::class);
        $this->customInputs();
        
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    private function customInputs()
    {
        $this->inputs();

        // photo
        $this->crud->modifyField('photo', [
            'type'         => 'image',
            'crop'         => true,
            'aspect_ratio' => 0,
        ]);

        // remove to fix arrangement, added again at the bottom, inlinecreate cause arrange to disorder
        $this->crud->removeField('manga_type_id');
        $this->crud->removeField('alternative_name');

        // pivot table
        $this->addInlineCreatePivotField('authors');
        $this->addInlineCreatePivotField('tags');
        
        $this->crud->addField(['name' => 'manga_type_id']);
        $this->addInlineCreateField('manga_type_id');

        $this->crud->addField([
            'name' => 'alternative_name',
            'type' => 'textarea'
        ]);
    }
}