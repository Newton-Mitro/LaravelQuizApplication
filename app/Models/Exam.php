<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function exam_papers()
    {
        return $this->hasMany('App\Models\ExamPaper');
    }
}
