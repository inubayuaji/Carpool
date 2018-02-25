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
          $table->string('nama_peminjam');
          $table->string('nama_pengijin');
          $table->string('keperluan');
          $table->string('dari');
          $table->string('ke');
          $table->string('tgl_perg');
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
