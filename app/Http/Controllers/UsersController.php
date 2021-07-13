<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
	public function index()
	{
		$this->data['users'] = User::all();
		return view('users.index',$this->data);
	}
    public function create()
    {
    	$this->data['roles'] = Role::all();
    	return view('users.create',$this->data);
    }
    public function store(Request $r)
    {
    	 $valid_data = $r->validate([
    		'name'      => 'required',
    		'email'     => 'required|unique:users',
    		'password'  => 'min:4|required_with:confirm_password|same:confirm_password',
    		'user_type' => 'required'
    	]);

    	 $password = Hash::make($r->password);
    	 $user = new User();
    	 $user->name      = $r->name;
    	 $user->email     = $r->email;
    	 $user->password  = $password;
    	 $user->user_type = $r->user_type;
    	 $user->save();

    	
    	return redirect()->route('users.all')->with('message','User created Successfully');

    }
}
