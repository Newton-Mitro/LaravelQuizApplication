<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'department_name' => "Administration",
        ]);
        DB::table('departments')->insert([
            'department_name' => "Operation",
        ]);
        DB::table('departments')->insert([
            'department_name' => "Marketing & Project",
        ]);
        DB::table('departments')->insert([
            'department_name' => "Treasury",
        ]);
        DB::table('departments')->insert([
            'department_name' => "Program & Protocol",
        ]);
        DB::table('departments')->insert([
            'department_name' => "Admin & HRD",
        ]);
        DB::table('departments')->insert([
            'department_name' => "ICT",
        ]);
        DB::table('departments')->insert([
            'department_name' => "Finance",
        ]);
        DB::table('departments')->insert([
            'department_name' => "Loan Recovery & Loan Investigation",
        ]);
        DB::table('departments')->insert([
            'department_name' => "Credit Operation",
        ]);
        DB::table('departments')->insert([
            'department_name' => "Accounts",
        ]);
        DB::table('departments')->insert([
            'department_name' => "Members Care",
        ]);
        DB::table('departments')->insert([
            'department_name' => "Real Estate Development",
        ]);
    }
}
