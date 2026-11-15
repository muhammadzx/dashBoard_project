<?php

namespace App\Models;

use App\Models\CourseUser;
use App\Models\Lecture;
use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function lecturer(){
        return $this->belongsTo(Lecturer::class);
    }

    public function courseusers(){
        return $this->hasMany(CourseUser::class);
    }

    public function lectures(){
        return $this->hasMany(Lecture::class);
    }
}
