<?php 

namespace App\Http\Controllers\Admin\Traits\Fetch;

trait FetchAuthorTrait
{
    public function fetchAuthor()
    {
        return $this->fetch(\App\Models\Author::class);
    }
    
}