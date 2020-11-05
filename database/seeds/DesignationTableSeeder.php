<?php

use Illuminate\Database\Seeder;

class DesignationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
            'designation_name' => "Chief Executive Officer",
        ]);
        DB::table('designations')->insert([
            'designation_name' => "Chief Officer",
        ]);
        DB::table('designations')->insert([
            'designation_name' => "Manager",
        ]);
        DB::table('designations')->insert([
            'designation_name' => "Data Base Administrator",
        ]);
        DB::table('designations')->insert([
            'designation_name' => "Assistant Manager-In charge",
        ]);
        DB::table('designations')->insert([
            'designation_name' => "Senior Officer",
        ]);
        DB::table('designations')->insert([
            'designation_name' => "Officer",
        ]);
        DB::table('designations')->insert([
            'designation_name' => "Junior Officer",
        ]);
        DB::table('designations')->insert([
            'designation_name' => "Assistant Officer",
        ]);
        DB::table('designations')->insert([
            'designation_name' => "Trainee Officer",
        ]);
        DB::table('designations')->insert([
            'designation_name' => "Engineer",
        ]);
        DB::table('designations')->insert([
            'designation_name' => "Graphics Designer",
        ]);
    }
}
