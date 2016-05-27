<?php

namespace TodoApp\Http\Controllers;

use Illuminate\Http\Request;

use TodoApp\Http\Requests;

use Auth;

class UserController extends Controller
{
    public function getSignup() {
    	if(Auth::check()) {
    		echo "already logged in";
    	}
    	else {
    		// If not logged in
    	}
    }

    public function getChangePassword() {

    }

    public function getUpdateProfile() {

    }

    public function getLogin() {  
    	if(!Auth::check()) {  	
    		return view('login');
    	}
    	else {
    		return view('dashboard');
    	}
    }

    public function getDashboard() {
    	return view('dashboard');
    }

    public function postSignup() {

    }

    public function postChangePassword() {

    }

    public function postUpdateProfile() {

    }

    public function postLogin(Request $request) {

    	$email = $request->input('email');
    	$password = $request->input('password');

    	 if (Auth::attempt(['email' => $email, 'password' => $password])) {            
            return redirect('dashboard');
         }
         else {
         	return redirect('/signin')->with('message', 'Incorrect email or password');
         }
    }

    public function postLogout() {
    	Auth::logout();
    }
}