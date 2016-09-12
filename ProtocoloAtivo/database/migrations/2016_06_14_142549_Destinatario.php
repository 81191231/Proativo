<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Destinatario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    Schema::create('destinatarios', function(Blueprint $table){
        $table->increments('id');
        $table->string('nome', 30);
        $table->string('inf_adicionais',60);
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
    }
}
