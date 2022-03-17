<?php

namespace App\Http\Controllers\Admin\Operations\Chapter;

use Goutte\Client;
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

        $error = false;
        $client = new Client();

        // loop all mangas
        $mangas = modelInstance('Manga')->all();

        foreach ($mangas as $manga) {
            // get my current chapter, check last chapter entries of that manga_id, if no data then save only the first links
            $currentChapter = modelInstance('Chapter')->where('manga_id', $manga->id)->first();

            foreach (json_decode($manga->sources) as $source) {
                $crawler = $client->request('GET', $source->url);
                $links = $crawler->filter($source->crawler_filter)->links();

                foreach ($links as $link) {
                    $url = $link->getUri();
                    $chapter = str_replace($source->url, '', $url);
                    $chapter = str_replace('/', '', $chapter);

                    $chapter = str_replace('chapter-', '', $chapter); // mangakakalot/manganelo
                    
                    modelInstance('Chapter')->create([
                        'manga_id' => $manga->id,
                        'chapter' => $chapter,
                        'url' => $url,
                    ]);

                    // manga has no chapters yet, then after saving the latest chapter then exist loop.
                    if ($currentChapter == null) {  
                        break; // exit loop
                    }

                    // TODO:: dont allow duplicate, and only insert latest/new chapters

                }// loop links
            }// loop sources
        }// loop manga


        return compact('error');

    }
}
