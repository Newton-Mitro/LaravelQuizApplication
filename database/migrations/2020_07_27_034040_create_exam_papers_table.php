<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_papers', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->string('question_text');
            $table->string('selected_answer')->nullable()->default(null);
            $table->boolean('answer_status')->nullable()->default(null);
//            $table->boolean('exam_paper_status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_papers');
    }
}
