<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Action',
                'created_at' => '2022-03-16 09:29:08',
                'updated_at' => '2022-03-16 09:29:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Adult',
                'created_at' => '2022-03-16 09:29:24',
                'updated_at' => '2022-03-16 09:29:24',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Adventure',
                'created_at' => '2022-03-16 09:29:36',
                'updated_at' => '2022-03-16 09:29:36',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Comedy',
                'created_at' => '2022-03-16 09:29:44',
                'updated_at' => '2022-03-16 09:29:44',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Cooking',
                'created_at' => '2022-03-16 09:29:52',
                'updated_at' => '2022-03-16 09:29:52',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Doujinshi',
                'created_at' => '2022-03-16 09:29:57',
                'updated_at' => '2022-03-16 09:29:57',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Drama',
                'created_at' => '2022-03-16 09:30:00',
                'updated_at' => '2022-03-16 09:30:00',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Ecchi',
                'created_at' => '2022-03-16 09:30:03',
                'updated_at' => '2022-03-16 09:30:03',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Fantasy',
                'created_at' => '2022-03-16 09:30:19',
                'updated_at' => '2022-03-16 09:30:19',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Gender bender',
                'created_at' => '2022-03-16 09:30:23',
                'updated_at' => '2022-03-16 09:30:23',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Harem',
                'created_at' => '2022-03-16 09:30:27',
                'updated_at' => '2022-03-16 09:30:27',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Historical',
                'created_at' => '2022-03-16 09:30:37',
                'updated_at' => '2022-03-16 09:30:37',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Horror',
                'created_at' => '2022-03-16 09:30:41',
                'updated_at' => '2022-03-16 09:30:41',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Isekai',
                'created_at' => '2022-03-16 09:30:44',
                'updated_at' => '2022-03-16 09:30:44',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Josei',
                'created_at' => '2022-03-16 09:30:53',
                'updated_at' => '2022-03-16 09:30:53',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Manhua',
                'created_at' => '2022-03-16 09:30:56',
                'updated_at' => '2022-03-16 09:30:56',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Manhwa',
                'created_at' => '2022-03-16 09:31:00',
                'updated_at' => '2022-03-16 09:31:00',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Martial arts',
                'created_at' => '2022-03-16 09:31:03',
                'updated_at' => '2022-03-16 09:31:03',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Mature',
                'created_at' => '2022-03-16 09:31:08',
                'updated_at' => '2022-03-16 09:31:08',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Mecha',
                'created_at' => '2022-03-16 09:31:11',
                'updated_at' => '2022-03-16 09:31:11',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Medical',
                'created_at' => '2022-03-16 09:31:16',
                'updated_at' => '2022-03-16 09:31:16',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Mystery',
                'created_at' => '2022-03-16 09:31:20',
                'updated_at' => '2022-03-16 09:31:20',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'One shot',
                'created_at' => '2022-03-16 09:31:24',
                'updated_at' => '2022-03-16 09:31:24',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Psychological',
                'created_at' => '2022-03-16 09:31:28',
                'updated_at' => '2022-03-16 09:31:28',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Romance',
                'created_at' => '2022-03-16 09:31:33',
                'updated_at' => '2022-03-16 09:31:33',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'School life',
                'created_at' => '2022-03-16 09:31:37',
                'updated_at' => '2022-03-16 09:31:37',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Sci fi',
                'created_at' => '2022-03-16 09:31:41',
                'updated_at' => '2022-03-16 09:31:41',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Seinen',
                'created_at' => '2022-03-16 09:31:45',
                'updated_at' => '2022-03-16 09:31:45',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Shoujo',
                'created_at' => '2022-03-16 09:31:48',
                'updated_at' => '2022-03-16 09:31:48',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Shoujo ai',
                'created_at' => '2022-03-16 09:31:51',
                'updated_at' => '2022-03-16 09:31:51',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Shounen',
                'created_at' => '2022-03-16 09:31:55',
                'updated_at' => '2022-03-16 09:31:55',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Shounen ai',
                'created_at' => '2022-03-16 09:31:59',
                'updated_at' => '2022-03-16 09:31:59',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Slice of life',
                'created_at' => '2022-03-16 09:32:02',
                'updated_at' => '2022-03-16 09:32:02',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Smut',
                'created_at' => '2022-03-16 09:32:06',
                'updated_at' => '2022-03-16 09:32:06',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Sports',
                'created_at' => '2022-03-16 09:32:09',
                'updated_at' => '2022-03-16 09:32:09',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Supernatural',
                'created_at' => '2022-03-16 09:32:14',
                'updated_at' => '2022-03-16 09:32:14',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Tragedy',
                'created_at' => '2022-03-16 09:32:19',
                'updated_at' => '2022-03-16 09:32:19',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Webtoons',
                'created_at' => '2022-03-16 09:32:22',
                'updated_at' => '2022-03-16 09:32:22',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Yaoi',
                'created_at' => '2022-03-16 09:32:27',
                'updated_at' => '2022-03-16 09:32:27',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Yuri',
                'created_at' => '2022-03-16 09:32:32',
                'updated_at' => '2022-03-16 09:32:32',
            ),
        ));
        
        
    }
}