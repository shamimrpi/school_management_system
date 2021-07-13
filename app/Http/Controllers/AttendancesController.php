<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\User;
use App\Section;

class AttendancesController extends Controller
{
    //

    public function index()
    {
    	$this->data['attendances'] = Attendance::all();
    	return view('attendances.index',$this->data);
    }

    public function create()
    {
    	$this->data['students'] = User::where('user_type',3)->get();
    	$this->data['teachers'] = User::where('user_type',2)->get();
    	$this->data['classes']  = Section::all();
    	return view('attendances.create',$this->data);
    }
}
