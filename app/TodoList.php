<?php

namespace TodoApp;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    public function todoitems() {
    	return $this->HasMany('TodoApp\TodoItem');
    }

    public function userlists() {
    	return $this->belongsTo('TodoApp\UserList');
    }
}
