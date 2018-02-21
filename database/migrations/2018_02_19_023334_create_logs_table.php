<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('logs', function(Blueprint $table){
          $table->increments('id');
          $table->string('request_name');
          $table->string('supervisior_name');
          $table->string('tgl_pergi');
          $table->string('tgl_pulang');
          $table->string('status');
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
        Schema::drop('logs');
    }
}
