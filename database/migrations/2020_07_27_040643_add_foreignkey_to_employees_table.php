<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('employees', function (Blueprint $table) {
//            $table->foreignId('department_id')->constrained();
//            $table->foreignId('designation_id')->constrained();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('employees', function (Blueprint $table) {
//            $table->dropForeign(['department_id','designation_id']);
//        });
    }
}
