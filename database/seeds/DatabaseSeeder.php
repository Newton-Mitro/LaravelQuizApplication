<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SettingSeeder::class,
            //SegmentTableSeeder::class,

//            DepartmentsTableSeeder::class,
//            DesignationTableSeeder::class,
//            EmployeesTableSeeder::class,
            ExamTableSeeder::class,
            //QuestionBankTableSeeder::class,
            //AnswerOptionsTableSeeder::class,
        ]);
    }
}
