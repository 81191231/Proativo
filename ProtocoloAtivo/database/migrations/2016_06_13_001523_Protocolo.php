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
        $table->enum('status', array('Emitido', 'Entregue', 'Enviado', 'Cancelado', 'Em Espera'))->default('Emitido');
        $table->integer('destinatario_id')->unsigned();
        $table->foreign('destinatario_id')->references('id')->on('Destinatarios');
        $table->integer('emitente_id')->unsigned();
        $table->foreign('emitente_id')->references('id')->on('Emitentes');
        $table->string('recebedor')->default('Ainda não foi recebido');
        $table->integer('tipo_documento_id')->unsigned();
        $table->foreign('tipo_documento_id')->references('id')->on('Tipo_documentos');
        $table->integer('Documento_id')->unsigned();
        $table->foreign('Documento_id')->references('id')->on('Documentos');
        $table->string('data_hora_recebimento')->default('Documento ainda não foi entregue!');
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
        Schema::drop('protocolos');
    }
}
