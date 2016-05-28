<?php

namespace TodoApp\Http\Controllers;

use Illuminate\Http\Request;

use TodoApp\Http\Requests;

use Auth;

class TodoController extends Controller
{
    public function getTodoList() {

    }

    public function getUpdateTodoList() {

    }

    public function getTodoItem() {

    }

    public function getNewTodoList() {
    	/*$user = \TodoApp\User::where('firstname','=','Maxwell')->where('lastname','=','Nevitt')->firstOrFail();    	

    	$todolist = new \TodoApp\UserList();
    	$todolist->title = "My second list";
    	$todolist->user_id = $user->id;  
    	$todolist->save();*/


    }

    public function getTodoLists() {
    	$user_id = Auth::user()->id;

    	$todolists = \TodoApp\UserList::where('user_id','=',$user_id)->get();
    	
    	foreach($todolists as $todolist) {
    		echo $todolist->title." ";
    	}
    }

    public function getUpdateTodoItem() {

    }

    public function postTodoItem() {

    }

    public function postUpdateTodoItem() {

    }

    public function postTodoList() {

    }

    public function postUpdateTodoList() {

    }
}
