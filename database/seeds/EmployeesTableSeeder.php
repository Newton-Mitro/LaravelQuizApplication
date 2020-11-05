<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 1000; $i < 3333; $i++) {
            DB::table('employees')->insert([
                'employee_name' => $faker->name,
                'employee_id_no' => $i,
                'department_id' => $faker->numberBetween($min = 1, $max = 10),
                'designation_id' => $faker->numberBetween($min = 1, $max = 10),
            ]);
        }

    }
}
