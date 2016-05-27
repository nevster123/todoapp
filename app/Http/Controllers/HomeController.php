<?php

namespace TodoApp\Http\Controllers;

use Illuminate\Http\Request;

use TodoApp\Http\Requests;
use Hash;

class HomeController extends Controller
{
    public function index() {
    	$user = new \TodoApp\User();
    	$user->firstname = "Max";
    	$user->lastname = "Nev";
    	$user->email = "max.nev@email.com";
    	$user->password = Hash::make("password");
    	//$user->save();
    }




}
