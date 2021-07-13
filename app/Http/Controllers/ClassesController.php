<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
class ClassesController extends Controller
{
    public function index()
    {
    	$this->data['classes'] = Section::all();
    	return view('classes.index',$this->data);
    }
    public function create()
    {
    	return view('classes.create');
    }
    public function store(Request $r)
    {
    	$valide_data = $r->validate([
    		'name' => 'required|unique:sections'
    	]);

    	Section::create($valide_data);
    	return back()->with('message','Class Created succcessfuly');
    }
}
