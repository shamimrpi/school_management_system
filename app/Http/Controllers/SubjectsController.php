<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Section;
use App\Subject;
class SubjectsController extends Controller
{
    //
	public function index()
	{
		$this->data['subjects'] = Subject::all();
		return view('subjects.index',$this->data);
	}
    public function create()
    {
    	$this->data['teachers'] = User::select('*')->where('user_type',2)->get();
    	$this->data['classes'] = Section::all();
    	return view('subjects.create',$this->data);
    }
    public function store(Request $r)
    {
    	$valid_data = $r->validate([
    		'name' => 'required',
    		'class_id' => 'required',
    		'teacher_id' => 'required'
    	]);

    	Subject::create($valid_data);
    	return back()->with('message','Subject Created Successfully');
    }
}
