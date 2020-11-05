<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    public function employees()
    {
        return $this->hasMany('App\Models\Employee');
    }
}
