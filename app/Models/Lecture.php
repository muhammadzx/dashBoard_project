<?php

namespace App\Models;

use App\Models\Courses;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function course(){
        return $this->belongsTo(Courses::class);
    }
}
