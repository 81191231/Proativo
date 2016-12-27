<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Protocolo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    //
    Schema::create('protocolos', function(Blueprint $table){
        $table->increments('id');
        $table->enum('status', array('Emitido', 'Entregue', 'Cancelado'))->default('Emitido');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
        $table->integer('destinatario_id')->unsigned();
        $table->foreign('destinatario_id')->references('id')->on('destinatarios');
        $table->string('recebedor')->default('Ainda não foi recebido');    
        $table->json('tipo_documento');
        $table->string('anexo_comprovante')->default('Nenhum Documento anexado');
        $table->string('data_hora_recebimento')->default('Documento ainda não foi entregue!');
        $table->string('descricao')->nullable();
        $table->string('alterador')->nullable();
        $table->string('motivo')->default('nenhum');
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
        Schema::drop('protocolos');
    }
}
