<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => "Super Admin",
            'display_name' => "Super Administrator",
        ]);
        DB::table('roles')->insert([
            'name' => "Site Admin",
            'display_name' => "Site Administrator",
        ]);
        DB::table('roles')->insert([
            'name' => "Content Writer",
            'display_name' => "Content Writer",
        ]);
        DB::table('roles')->insert([
            'name' => "Editor",
            'display_name' => "Editor",
        ]);
        DB::table('roles')->insert([
            'name' => "Moderator",
            'display_name' => "Moderator",
        ]);
        DB::table('roles')->insert([
            'name' => "Subscriber",
            'display_name' => "Subscriber",
        ]);
    }
}
