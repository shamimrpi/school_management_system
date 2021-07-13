<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StudentsController extends Controller
{
    public function index()
    {
    	$this->data['students'] = User::select('*')->where('user_type',3)->get();
    	return view('students.index',$this->data);
    }
}
