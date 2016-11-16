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
        $table->integer('tipo_documento_id')->unsigned();
        $table->foreign('tipo_documento_id', array())->references('id')->on('Tipo_documentos');
        $table->string('anexo_comprovante',array())->default('Nenhum Documento anexado');
        $table->string('data_hora_recebimento')->default('Documento ainda não foi entregue!');
        $table->string('motivo');
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
