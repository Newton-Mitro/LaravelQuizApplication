<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamPaper extends Model
{
    public function exam()
    {
        return $this->belongsTo('App\Models\Exam');
    }
}
