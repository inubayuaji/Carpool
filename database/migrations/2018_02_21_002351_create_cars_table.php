<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cars', function(Blueprint $table){
          $table->string('plat_no')->unique();
          $table->string('rakitan');
          $table->string('type');
          $table->string('tgl_beli');
          $table->string('kon_mesin');
          $table->string('dipinjam');
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
        Schema::drop('cars');
    }
}
