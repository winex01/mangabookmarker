<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{   
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
	use \Venturecraft\Revisionable\RevisionableTrait;
    use \App\Models\Traits\RevisionableInitTrait;
	use \App\Models\Traits\SoftDeletesInitTrait;
	use \App\Models\Traits\AttachmentTrait;
    use \App\Models\Traits\ImageTrait;
    use \App\Models\Traits\FileTrait;
    use \Awobaz\Compoships\Compoships;

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public static function boot() 
    {
        parent::boot();

        static::deleted(function($data) {
            if ($data->attachment) {
                (new self)->deleteFileFromStorage($data, $data->attachment);
            }
        });
    }

    // revision
    public function identifiableName()
    {
        return $this->name;
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
   
   /**
     * Scope a query to only include employees that belong on that payroll periods
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePayrollPeriod($query, $groupingIds)
    {
        return $query->whereHas('employee', function($q) use($groupingIds) {
            $q->whereHas('employmentInformation', function($q) use($groupingIds) {
                $q->grouping($groupingIds);
            });
        });
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */
    public function getModelAttribute()
    {   
        $class = get_class($this);
    	
        return str_replace('App\\Models\\', '', $class);
    }
    
    public function getCreatedAtAsDateAttribute()
    {
        return $this->created_at->toDateString();
    }

}
