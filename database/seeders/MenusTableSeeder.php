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
                'parent_id' => 67,
                'lft' => 3,
                'rgt' => 4,
                'depth' => 2,
                'created_at' => '2020-12-16 06:58:25',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            1 => 
            array (
                'id' => 15,
                'label' => 'Administrator Only',
                'url' => NULL,
                'icon' => NULL,
                'permission' => 'admin_view',
                'parent_id' => NULL,
                'lft' => 130,
                'rgt' => 131,
                'depth' => 1,
                'created_at' => '2020-12-16 07:23:11',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            2 => 
            array (
                'id' => 16,
                'label' => 'Audit Trails',
                'url' => 'audittrail',
                'icon' => '<i class=\'nav-icon la la-history\'></i>',
                'permission' => 'audit_trails_list',
                'parent_id' => NULL,
                'lft' => 132,
                'rgt' => 133,
                'depth' => 1,
                'created_at' => '2020-12-16 07:26:27',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            3 => 
            array (
                'id' => 17,
                'label' => 'Authentication',
                'url' => NULL,
                'icon' => '<i class="nav-icon la la-users"></i>',
                'permission' => NULL,
                'parent_id' => NULL,
                'lft' => 134,
                'rgt' => 141,
                'depth' => 1,
                'created_at' => '2020-12-16 07:27:02',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            4 => 
            array (
                'id' => 18,
                'label' => 'Users',
                'url' => 'user',
                'icon' => '<i class="nav-icon la la-user"></i>',
                'permission' => 'users_list',
                'parent_id' => 17,
                'lft' => 135,
                'rgt' => 136,
                'depth' => 2,
                'created_at' => '2020-12-16 07:27:32',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            5 => 
            array (
                'id' => 19,
                'label' => 'Roles',
                'url' => 'role',
                'icon' => '<i class="nav-icon la la-id-badge"></i>',
                'permission' => 'roles_list',
                'parent_id' => 17,
                'lft' => 137,
                'rgt' => 138,
                'depth' => 2,
                'created_at' => '2020-12-16 07:27:49',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            6 => 
            array (
                'id' => 20,
                'label' => 'Permissions',
                'url' => 'permission',
                'icon' => '<i class="nav-icon la la-key"></i>',
                'permission' => 'permissions_list',
                'parent_id' => 17,
                'lft' => 139,
                'rgt' => 140,
                'depth' => 2,
                'created_at' => '2020-12-16 07:28:08',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            7 => 
            array (
                'id' => 21,
                'label' => 'Advanced',
                'url' => NULL,
                'icon' => '<i class="nav-icon la la-cogs"></i>',
                'permission' => NULL,
                'parent_id' => NULL,
                'lft' => 142,
                'rgt' => 151,
                'depth' => 1,
                'created_at' => '2020-12-16 07:28:27',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            8 => 
            array (
                'id' => 22,
                'label' => 'File Manager',
                'url' => 'elfinder',
                'icon' => '<i class="nav-icon la la-files-o"></i>',
                'permission' => 'advanced_file_manager',
                'parent_id' => 21,
                'lft' => 143,
                'rgt' => 144,
                'depth' => 2,
                'created_at' => '2020-12-16 07:30:40',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            9 => 
            array (
                'id' => 23,
                'label' => 'Backups',
                'url' => 'backup',
                'icon' => '<i class=\'nav-icon la la-hdd-o\'></i>',
                'permission' => 'advanced_backups',
                'parent_id' => 21,
                'lft' => 145,
                'rgt' => 146,
                'depth' => 2,
                'created_at' => '2020-12-16 07:31:21',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            10 => 
            array (
                'id' => 24,
                'label' => 'Logs',
                'url' => 'log',
                'icon' => '<i class=\'nav-icon la la-terminal\'></i>',
                'permission' => 'advanced_logs',
                'parent_id' => 21,
                'lft' => 147,
                'rgt' => 148,
                'depth' => 2,
                'created_at' => '2020-12-16 07:31:47',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            11 => 
            array (
                'id' => 25,
                'label' => 'Settings',
                'url' => 'setting',
                'icon' => '<i class=\'nav-icon la la-cog\'></i>',
                'permission' => 'advanced_settings',
                'parent_id' => 21,
                'lft' => 149,
                'rgt' => 150,
                'depth' => 2,
                'created_at' => '2020-12-16 07:32:02',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            12 => 
            array (
                'id' => 26,
                'label' => 'Menu',
                'url' => 'menu',
                'icon' => '<i class=\'nav-icon la la-list\'></i>',
                'permission' => 'menus_list',
                'parent_id' => NULL,
                'lft' => 152,
                'rgt' => 153,
                'depth' => 1,
                'created_at' => '2020-12-16 07:32:42',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            13 => 
            array (
                'id' => 65,
                'label' => 'Web Artisan Tinker',
                'url' => 'tinker',
                'icon' => '<i class=\'nav-icon lab la-laravel\'></i>',
                'permission' => 'admin_web_tinker',
                'parent_id' => NULL,
                'lft' => 154,
                'rgt' => 155,
                'depth' => 1,
                'created_at' => '2021-04-04 23:55:28',
                'updated_at' => '2022-03-10 18:29:31',
            ),
            14 => 
            array (
                'id' => 67,
                'label' => 'Home',
                'url' => NULL,
                'icon' => '<i class="nav-icon la la-home"></i>',
                'permission' => NULL,
                'parent_id' => NULL,
                'lft' => 2,
                'rgt' => 7,
                'depth' => 1,
                'created_at' => '2021-08-04 15:43:05',
                'updated_at' => '2022-03-10 18:29:31',
            ),
        ));
        
        
    }
}