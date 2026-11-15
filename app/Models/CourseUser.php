<?php

namespace App\Models;

use App\Models\Courses;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    public function course(){
        return $this->belongsTo(Courses::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
