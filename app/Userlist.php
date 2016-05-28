<?php

namespace TodoApp;

use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
	protected $table = "userlist";

	public function users() {
		return $this->belongsTo('TodoApp\User');
	}

	public function todolists() {
		return $this->belongsToMany('TodoApp\TodoList');
	}
}
