<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('keperluan');
          $table->string('jns_pinjaman');
          $table->string('plat_no');
          $table->string('dari');
          $table->string('ke');
          $table->string('tgl_berangkat');
          $table->string('tgl_pulang');
          $table->string('alasan');
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
        Schema::drop('orders');
    }
}
