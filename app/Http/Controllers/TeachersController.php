<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;



class TeachersController extends Controller
{
    public function index()
    {
    	$this->data['teachers'] = User::select('*')->where('user_type',2)->get();
    	return view('teachers.index',$this->data);
    }
}
