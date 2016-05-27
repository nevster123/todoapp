<?php

namespace TodoApp;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    public function users() {
    	return $this->belongsToMany('TodoApp\User', 'user', 'user_id');
    }

    public function todolists() {
    	return $this->belongsToMany('TodoApp\TodoList', 'todolist', 'todolist_id');
    }
}
