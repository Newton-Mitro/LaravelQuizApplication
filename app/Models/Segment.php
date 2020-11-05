<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    public function question_banks()
    {
        return $this->hasMany('App\Models\QuestionBank');
    }
}
