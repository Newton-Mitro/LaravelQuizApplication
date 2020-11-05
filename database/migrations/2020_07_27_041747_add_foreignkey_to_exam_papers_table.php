<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToExamPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exam_papers', function (Blueprint $table) {
            $table->foreignId('exam_id')->constrained();
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('question_bank_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exam_papers', function (Blueprint $table) {
            $table->dropForeign(['exam_id','employee_id','question_bank_id']);
        });
    }
}
