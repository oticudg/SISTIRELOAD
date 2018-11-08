<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriagesTable extends Migration
{

    public function up()
    {
        Schema::create('triages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('triage');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('triages');
    }
}
