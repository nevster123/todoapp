<?php

namespace TodoApp\Http\Controllers;

use Illuminate\Http\Request;

use TodoApp\Http\Requests;

use Auth;

use Hash;

use Validator;

class UserController extends Controller
{
    public function getSignup() {
    	if(Auth::check()) {
    		return view('dashboard');
    	}
    	else {
    		return view('signup');
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

    public function profile() {
    	
    }

    public function postSignup(Request $request) {    	
    	$firstname = $request->input('firstname');
    	$lastname = $request->input('lastname');
    	$email = $request->input('email');
    	$password = $request->input('password');
    	$conpassword = $request->input('confirmpassword');

    	$v = Validator::make($request->all(),
    array(
        'firstname' => 'required',
        'lastname' => 'required',
        'password' => 'required|min:8',
        'confirmpassword' => 'required|min:8|same:password',
        'email' => 'required|email|unique:users'
    )
);

    $fields = array('fields' => array('firstname' => $firstname));

    if ($v->fails())
    {
        return redirect()->back()->withErrors($v->errors())->withInput($request->all());
    }
    else {
    		$user = new \TodoApp\User();
    		$user->firstname = $firstname;
    		$user->lastname = $lastname;
    		$user->email = $email;
    		$user->password = Hash::make($password);
    		$user->save();
    		return redirect('dashboard')->with('message', 'User successfully created');
    }
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