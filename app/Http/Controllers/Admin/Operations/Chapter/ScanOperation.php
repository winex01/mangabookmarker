<?php

namespace App\Http\Controllers\Admin\Operations\Chapter;

use Illuminate\Support\Facades\Route;

trait ScanOperation
{
    private $scanButton = 'chapters.custom_scan';

    /**
     * Define which routes are needed for this operation.
     *
     * @param string $segment    Name of the current entity (singular). Used as first URL segment.
     * @param string $routeName  Prefix of the route name.
     * @param string $controller Name of the current CrudController.
     */
    protected function setupScanRoutes($segment, $routeName, $controller)
    {
        Route::post($segment.'/scan', [
            'as'        => $routeName.'.scan',
            'uses'      => $controller.'@scan',
            'operation' => 'scan',
        ]);
    }

    /**
     * Add the default settings, buttons, etc that this operation needs.
     */
    protected function setupScanDefaults()
    {
        $this->crud->allowAccess('scan');

        $this->crud->operation('scan', function () {
            $this->crud->loadDefaultOperationSettingsFromConfig();
        });

        $this->crud->operation(['list', 'show'], function () {
            $this->crud->addButtonFromView('top', 'scan', $this->scanButton);
        });
    }

    /**
     * Show the view for performing the operation.
     *
     * @return Response
     */
    public function scan()
    {
        $this->crud->hasAccessOrFail('scan');

        // TODO:: Guotte/Client business logic here
        
        $error = false;
        
        return compact('error');

    }
}
