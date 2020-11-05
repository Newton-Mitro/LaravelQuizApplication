<?php


namespace App\Classes;


use Illuminate\Support\Facades\Session;

class ResultCalculation
{
    public $total_question = 0;
    public $answered_question = 0;
    public $correct_answer = 0;
    public $wrong_answer = 0;


    public function checkAnswer($question_id, $selected_answer){

    }

    public function getTotalQuestionNumber(){
        return $this->total_question;
    }

    public function getTotalAnsweredQuestionNumber(){
        return $this->answered_question;
    }

    public function getTotalCorrectAnswersNumber(){
        return $this->correct_answer;
    }

    public function getTotalWrongAnswersNumber(){
        return $this->wrong_answer;
    }

}
