<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoitem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
         Schema::create('todoitem', function (Blueprint $table) {
             $table->increments('id')->unsigned();
             $table->string('title');
             $table->string('content');
             $table->integer('user_id')->unsigned();
             $table->boolean('completed');
             $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('todoitem');
    }
}
