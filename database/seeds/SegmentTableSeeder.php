<?php

use Illuminate\Database\Seeder;

class SegmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('segments')->insert([
            'segment_name' => "General Knowledge",
            'segment_status' => true,
        ]);
        DB::table('segments')->insert([
            'segment_name' => "ICT (basic)",
            'segment_status' => true,
        ]);
        DB::table('segments')->insert([
            'segment_name' => "History of the CCCUL",
            'segment_status' => true,
        ]);
        DB::table('segments')->insert([
            'segment_name' => "Products & Services of the CCCUL",
            'segment_status' => true,
        ]);
        DB::table('segments')->insert([
            'segment_name' => "Cooperative Law & By Laws",
            'segment_status' => true,
        ]);
        DB::table('segments')->insert([
            'segment_name' => "Professional Attributes",
            'segment_status' => true,
        ]);
    }
}
