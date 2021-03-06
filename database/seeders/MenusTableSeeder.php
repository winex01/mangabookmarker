<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => 'Dashboard',
                'url' => 'dashboard',
                'icon' => '<i class="nav-icon la la-dashboard "></i>',
                'permission' => NULL,
                'parent_id' => NULL,
                'lft' => 2,
                'rgt' => 3,
                'depth' => 1,
                'created_at' => '2020-12-16 06:58:25',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            1 => 
            array (
                'id' => 15,
                'label' => 'Administrator Only',
                'url' => NULL,
                'icon' => NULL,
                'permission' => 'admin_view',
                'parent_id' => NULL,
                'lft' => 16,
                'rgt' => 17,
                'depth' => 1,
                'created_at' => '2020-12-16 07:23:11',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            2 => 
            array (
                'id' => 16,
                'label' => 'Audit Trails',
                'url' => 'audittrail',
                'icon' => '<i class=\'nav-icon la la-history\'></i>',
                'permission' => 'audit_trails_list',
                'parent_id' => NULL,
                'lft' => 18,
                'rgt' => 19,
                'depth' => 1,
                'created_at' => '2020-12-16 07:26:27',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            3 => 
            array (
                'id' => 17,
                'label' => 'Authentication',
                'url' => NULL,
                'icon' => '<i class="nav-icon la la-users"></i>',
                'permission' => NULL,
                'parent_id' => NULL,
                'lft' => 20,
                'rgt' => 27,
                'depth' => 1,
                'created_at' => '2020-12-16 07:27:02',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            4 => 
            array (
                'id' => 18,
                'label' => 'Users',
                'url' => 'user',
                'icon' => '<i class="nav-icon la la-user"></i>',
                'permission' => 'users_list',
                'parent_id' => 17,
                'lft' => 21,
                'rgt' => 22,
                'depth' => 2,
                'created_at' => '2020-12-16 07:27:32',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            5 => 
            array (
                'id' => 19,
                'label' => 'Roles',
                'url' => 'role',
                'icon' => '<i class="nav-icon la la-id-badge"></i>',
                'permission' => 'roles_list',
                'parent_id' => 17,
                'lft' => 23,
                'rgt' => 24,
                'depth' => 2,
                'created_at' => '2020-12-16 07:27:49',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            6 => 
            array (
                'id' => 20,
                'label' => 'Permissions',
                'url' => 'permission',
                'icon' => '<i class="nav-icon la la-key"></i>',
                'permission' => 'permissions_list',
                'parent_id' => 17,
                'lft' => 25,
                'rgt' => 26,
                'depth' => 2,
                'created_at' => '2020-12-16 07:28:08',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            7 => 
            array (
                'id' => 21,
                'label' => 'Advanced',
                'url' => NULL,
                'icon' => '<i class="nav-icon la la-cogs"></i>',
                'permission' => NULL,
                'parent_id' => NULL,
                'lft' => 28,
                'rgt' => 37,
                'depth' => 1,
                'created_at' => '2020-12-16 07:28:27',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            8 => 
            array (
                'id' => 22,
                'label' => 'File Manager',
                'url' => 'elfinder',
                'icon' => '<i class="nav-icon la la-files-o"></i>',
                'permission' => 'advanced_file_manager',
                'parent_id' => 21,
                'lft' => 29,
                'rgt' => 30,
                'depth' => 2,
                'created_at' => '2020-12-16 07:30:40',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            9 => 
            array (
                'id' => 23,
                'label' => 'Backups',
                'url' => 'backup',
                'icon' => '<i class=\'nav-icon la la-hdd-o\'></i>',
                'permission' => 'advanced_backups',
                'parent_id' => 21,
                'lft' => 31,
                'rgt' => 32,
                'depth' => 2,
                'created_at' => '2020-12-16 07:31:21',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            10 => 
            array (
                'id' => 24,
                'label' => 'Logs',
                'url' => 'log',
                'icon' => '<i class=\'nav-icon la la-terminal\'></i>',
                'permission' => 'advanced_logs',
                'parent_id' => 21,
                'lft' => 33,
                'rgt' => 34,
                'depth' => 2,
                'created_at' => '2020-12-16 07:31:47',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            11 => 
            array (
                'id' => 25,
                'label' => 'Settings',
                'url' => 'setting',
                'icon' => '<i class=\'nav-icon la la-cog\'></i>',
                'permission' => 'advanced_settings',
                'parent_id' => 21,
                'lft' => 35,
                'rgt' => 36,
                'depth' => 2,
                'created_at' => '2020-12-16 07:32:02',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            12 => 
            array (
                'id' => 26,
                'label' => 'Menu',
                'url' => 'menu',
                'icon' => '<i class=\'nav-icon la la-list\'></i>',
                'permission' => 'menus_list',
                'parent_id' => NULL,
                'lft' => 38,
                'rgt' => 39,
                'depth' => 1,
                'created_at' => '2020-12-16 07:32:42',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            13 => 
            array (
                'id' => 65,
                'label' => 'Web Artisan Tinker',
                'url' => 'tinker',
                'icon' => '<i class=\'nav-icon lab la-laravel\'></i>',
                'permission' => 'admin_web_tinker',
                'parent_id' => NULL,
                'lft' => 40,
                'rgt' => 41,
                'depth' => 1,
                'created_at' => '2021-04-04 23:55:28',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            14 => 
            array (
                'id' => 70,
                'label' => 'Manga Types',
                'url' => 'mangatype',
                'icon' => '<i class="nav-icon las la-file-alt"></i>',
                'permission' => 'manga_types_list',
                'parent_id' => NULL,
                'lft' => 12,
                'rgt' => 13,
                'depth' => 1,
                'created_at' => '2022-03-16 08:55:54',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            15 => 
            array (
                'id' => 71,
                'label' => 'Tags',
                'url' => 'tag',
                'icon' => '<i class="nav-icon las la-tags"></i>',
                'permission' => 'tags_list',
                'parent_id' => NULL,
                'lft' => 10,
                'rgt' => 11,
                'depth' => 1,
                'created_at' => '2022-03-16 09:18:01',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            16 => 
            array (
                'id' => 72,
                'label' => 'Mangas',
                'url' => 'manga',
                'icon' => '<i class="nav-icon las la-book-open"></i>',
                'permission' => 'mangas_list',
                'parent_id' => NULL,
                'lft' => 4,
                'rgt' => 5,
                'depth' => 1,
                'created_at' => '2022-03-16 09:52:11',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            17 => 
            array (
                'id' => 73,
                'label' => 'Authors',
                'url' => 'author',
                'icon' => '<i class="nav-icon las la-user-tie"></i>',
                'permission' => 'authors_list',
                'parent_id' => NULL,
                'lft' => 8,
                'rgt' => 9,
                'depth' => 1,
                'created_at' => '2022-03-16 11:15:02',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            18 => 
            array (
                'id' => 74,
                'label' => 'Chapters',
                'url' => 'chapter',
                'icon' => '<i class="nav-icon las la-file-alt"></i>',
                'permission' => 'chapters_list',
                'parent_id' => NULL,
                'lft' => 6,
                'rgt' => 7,
                'depth' => 1,
                'created_at' => '2022-03-17 11:48:37',
                'updated_at' => '2022-03-18 22:29:23',
            ),
            19 => 
            array (
                'id' => 75,
                'label' => 'Crawler Filters',
                'url' => 'crawlerfilter',
                'icon' => '<i class="nav-icon las la-filter"></i>',
                'permission' => 'crawler_filters_list',
                'parent_id' => NULL,
                'lft' => 14,
                'rgt' => 15,
                'depth' => 1,
                'created_at' => '2022-03-18 09:19:34',
                'updated_at' => '2022-03-18 22:29:23',
            ),
        ));
        
        
    }
}