<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CrawlerFiltersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crawler_filters')->delete();
        
        \DB::table('crawler_filters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'www.topmanhua.com',
                'filter' => '.version-chap a',
                'created_at' => '2022-03-18 09:33:34',
                'updated_at' => '2022-03-18 21:49:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'manganato.com',
                'filter' => '.row-content-chapter a',
                'created_at' => '2022-03-18 09:36:06',
                'updated_at' => '2022-03-18 21:48:52',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'www.readmng.com',
                'filter' => '.chp_lst a',
                'created_at' => '2022-03-18 09:37:03',
                'updated_at' => '2022-03-18 21:48:26',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'mangakakalot.com',
                'filter' => '.chapter-list a',
                'created_at' => '2022-03-18 09:48:23',
                'updated_at' => '2022-03-18 21:48:16',
            ),
        ));
        
        
    }
}