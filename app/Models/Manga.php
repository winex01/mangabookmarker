<?php

namespace App\Models;

use App\Models\Model;

class Manga extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'mangas';
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
    public static function boot() 
    {
        parent::boot();

        static::deleted(function($data) {
            if ($data->photo) {
                (new self)->deleteFileFromStorage($data, $data->photo);
            }
        });

    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function mangaType()
    {
        return $this->belongsTo(\App\Models\MangaType::class);
    }

    public function authors()
    {
        return $this->belongsToMany(\App\Models\Author::class);
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Models\Tag::class);
    }

    public function chapters()
    {
        return $this->hasMany(\App\Models\Chapter::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */
    public function getPhotoAttribute($value)
    {
        return ($value != null) ? 'storage/'.$value : $value;
    }

    public function getNameAttribute()
    {
        $authors = $this->authors()->pluck('name')->toArray();
        $authors = implode(', ', $authors);

        if ($authors == '' || $authors == null) {
            return $this->title;
        }

        return $this->title ." - ($authors)";
    }
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function setPhotoAttribute($value)
    {
        $attribute_name = 'photo';
        // or use your own disk, defined in config/filesystems.php
        $disk = 'public'; 
        // destination path relative to the disk above
        $destination_path = 'images/photo'; 

        $this->uploadImageToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
