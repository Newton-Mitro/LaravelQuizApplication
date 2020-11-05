<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question_bank()
    {
        return $this->belongsTo('App\Models\QuestionBank');
    }
}
