<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    public function segment()
    {
        return $this->belongsTo('App\Models\Segment');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }
}
