<?php

namespace TodoApp;

use Illuminate\Database\Eloquent\Model;

class Userlist extends Model
{
	public function users() {
		return $this->belongsTo('TodoApp\User');
	}

	public function todolists() {
		return $this->hasMany('TodoApp\TodoList');
	}


}
