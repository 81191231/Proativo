<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', array('emitente','adm'))->default('emitente');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('setor_id')->unsigned();
            $table->foreign('setor_id')->references('id')->on('setors');
            $table->string('password',255)->default('proativo123');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
