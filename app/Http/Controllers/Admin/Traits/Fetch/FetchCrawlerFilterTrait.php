<?php 

namespace App\Http\Controllers\Admin\Traits\Fetch;

trait FetchCrawlerFilterTrait
{
    public function fetchCrawlerFilter()
    {
        return $this->fetch(\App\Models\CrawlerFilter::class);
    }
    
}