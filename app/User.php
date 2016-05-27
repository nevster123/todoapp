<?php

namespace TodoApp;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
        ];

    public function todoitems() {
        return $this->hasMany('TodoApp\TodoItem');
    }

    public function userlists() {
        return $this->hasMany('TodoApp\UserList');
    }
}
