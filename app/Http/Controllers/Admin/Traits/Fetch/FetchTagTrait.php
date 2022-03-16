<?php 

namespace App\Http\Controllers\Admin\Traits\Fetch;

trait FetchTagTrait
{
    public function fetchTag()
    {
        return $this->fetch(\App\Models\Tag::class);
    }
    
}