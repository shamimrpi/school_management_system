<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
    	return view('login.login');
    }
    public function login_store(Request $r)
    {
    	$data = $r->only('email', 'password');
    
   	 if (Auth::attempt($data)) {
   	 		if(auth()->user()->user_type == 1)
   	 		{
    			return redirect()->route('dashboard')->with('message','You have been login successfully');
    		}
    		elseif(auth()->user()->user_type == 2)
    		{
    			return redirect()->route('teachers.all')->with('message','You have been login successfully');
    		}
    		else
    		{
    			return redirect()->route('students.all')->with('message','You have been login successfully');
    		}
   	 	}
    	 else {
    		return redirect()->route('login')->with('message','Email Or Password wrong');
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('login')->with('message','You have been logout');
    }

}
