<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Section;
class DashboardController extends Controller
{
    //

    public function index()
    {
    	$this->data['users'] = User::all();
    	$this->data['classes'] = Section::all();
    	$this->data['teachers'] = User::select('*')->where('user_type',2)->get();
    	$this->data['students'] = User::select('*')->where('user_type',3)->get();
    	return view('dashboard',$this->data);
    }
}
