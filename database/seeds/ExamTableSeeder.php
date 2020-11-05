<?php

use Illuminate\Database\Seeder;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
            'title' => "Mock Exam",
            'exam_date' => "2020-10-01",
        ]);
    }
}
