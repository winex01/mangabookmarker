<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\Builder;

class Chapter extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'chapters';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    protected static function booted()
    {
        parent::booted();

        static::addGlobalScope('CurrentChapterScope', function (Builder $builder) {
            (new self)->scopeNotDismiss($builder);
        });
    }


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function manga()
    {
        return $this->belongsTo(\App\Models\Manga::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    public function scopeNotDismiss($query)
    {
        return $query->where('dismiss', 0);
    }
    

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
