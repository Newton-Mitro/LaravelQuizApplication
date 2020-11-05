<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

    public function designation()
    {
        return $this->belongsTo('App\Models\Designation');
    }
}
