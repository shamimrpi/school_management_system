<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //

     public function student()
    {
        return $this->hasOne(User::class,'id','student_id');
    }

     public function teacher()
    {
        return $this->hasOne(User::class,'id','teacher_id');
    }
    public function class()
    {
        return $this->hasOne(Section::class,'id','class_id');
    }
}
