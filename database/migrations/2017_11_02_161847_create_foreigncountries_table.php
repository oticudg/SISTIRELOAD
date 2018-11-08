<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeigncountriesTable extends Migration
{

    public function up()
    {
        Schema::create('foreigncountries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foreign_country');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('foreigncountries');
    }
}
