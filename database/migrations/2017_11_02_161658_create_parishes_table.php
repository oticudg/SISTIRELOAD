<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParishesTable extends Migration
{

    public function up()
    {
        Schema::create('parishes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parish');
            $table->integer('municipality_id')->unsigned();
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parishes');
    }
}
