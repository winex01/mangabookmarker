<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MangaTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('manga_types')->delete();
        
        \DB::table('manga_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Japanese',
                'created_at' => '2022-03-16 09:04:06',
                'updated_at' => '2022-03-16 09:04:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Chinese',
                'created_at' => '2022-03-16 09:04:10',
                'updated_at' => '2022-03-16 09:04:10',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Korean',
                'created_at' => '2022-03-16 09:04:14',
                'updated_at' => '2022-03-16 09:04:14',
            ),
        ));
        
        
    }
}