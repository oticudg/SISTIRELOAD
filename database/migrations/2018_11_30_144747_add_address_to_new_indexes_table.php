<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressToNewIndexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::table('new_indexes', function (Blueprint $table) {
            $table->text('address')
                ->after('anotherc_id')
                ->nullable()
                ->default(null)
                ->comment('patient address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::table('new_indexes', function (Blueprint $table) {
            $table->dropColumn('address');
        });
    }
}
