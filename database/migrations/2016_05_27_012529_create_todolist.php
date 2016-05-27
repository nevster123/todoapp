<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodolist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('todolist', function (Blueprint $table) {
             $table->increments('id')->unsigned();
             $table->integer('userlist_id')->unsigned();
             $table->foreign('userlist_id')->references('id')->on('userlist')->onUpdate('cascade')->onDelete('cascade');             
             $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('todolist');
    }
}