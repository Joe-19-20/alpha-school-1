<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    public function courses(){
        return $this->belongsTo('App\Models\Course');
    }
}
