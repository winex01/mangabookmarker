<?php 

namespace App\Http\Controllers\Admin\Traits\Fetch;

trait FetchMangaTypeTrait
{
    public function fetchMangaType()
    {
        return $this->fetch(\App\Models\MangaType::class);
    }
    
}