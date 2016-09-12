<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Emitente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Emitentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->integer('setor_id')->unsigned();
            $table->foreign('setor_id')->references('id')->on('Setores');
            if (Schema::hasColumn('Emitentes', 'email')) {
            //  
                $msg = '<div id="modal" class="alert alert-danger" role="alert">Já existe um usuário com esse email!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
                return view('emitente.novo',compact('msg'));
            }            
            $table->string('inf_adicionais');
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
        //
        Schema::drop('Emitentes');
    }
}
