<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indexes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type_doc',['Venezolano/a','Extranjero/a','N/p']);
            $table->integer('patient_id')->unique();
            $table->enum('sex',['Masculino','Femenino']);
            $table->integer('number_record')->unique();
            $table->string('name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->date('admission_date');
            $table->date('egress_date');
            $table->integer('triage_id')->unsigned();
            $table->foreign('triage_id')->references('id')->on('triages');
            $table->integer('anotherc_id')->unsigned();
            $table->foreign('anotherc_id')->references('id')->on('foreigncountries');
            $table->text('observation');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');            
            $table->integer('parish_id')->unsigned();
            $table->foreign('parish_id')->references('id')->on('parishes');
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
        Schema::dropIfExists('indexes');
    }
}
