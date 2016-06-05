<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserEventsTableCollumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_events', function ($table){
          $table->renameColumn('users_id', 'user_id');
          $table->time('time')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_events', function ($table){
          $table->renameColumn('user_id', 'users_id');
          $table->time('time')->nullable(false)->change();
        });
    }
}
