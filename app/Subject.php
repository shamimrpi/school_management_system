<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //

    protected $guarded = [];

    public function teacher()
    {
    	return $this->belongsTo(User::class);
    }
    public function class()
    {
    	return $this->belongsTo(Section::class);
    }
}
