<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUpdateuToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('new_indexes', function (Blueprint $table) {
            $table->text('updateu_id')
                ->after('parish_id')
                ->nullable()
                ->default(null)
                ->comment('user who updated the story');
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
            $table->dropColumn('updateu_id');
        });
    }
}
