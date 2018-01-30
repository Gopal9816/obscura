<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColsToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users',function($table){
            $table->integer('level');
            $table->string('college');
            $table->string('phnumber');
            $table->string('provider');
            $table->string('provider_id');
            $table->dropColumn('password');
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
        Schema::table('users',function($table){
            $table->dropColumn('level');
            $table->dropColumn('college');
            $table->dropColumn('phnumber');
            $table->dropColumn('provider');
            $table->dropColumn('provider_id');
            $table->string('password');
        });

    }
}
