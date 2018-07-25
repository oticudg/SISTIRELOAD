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
            $table->increments('id')->unique();
            $table->enum('type_doc',['Venezolano/a','Extranjero/a','C/s','N/p']);
            $table->string('patient_id')->unique()->nullable();
            $table->enum('sex',['Masculino','Femenino']);
            $table->string('number_record',11)->unique();
            $table->string('name');
            $table->string('last_name');
            $table->date('birthdate')->nullable();
            $table->date('admission_date')->nullable();
            $table->date('egress_date')->nullable();
            $table->integer('triage_id')->unsigned();
            $table->foreign('triage_id')->references('id')->on('triages')->nullable();
            $table->integer('anotherc_id')->unsigned()->nullable();
            $table->foreign('anotherc_id')->references('id')->on('foreigncountries');
            $table->text('observation')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');            
            $table->integer('parish_id')->unsigned()->nullable();
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
