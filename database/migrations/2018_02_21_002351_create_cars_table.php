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
          $table->string('tipe');
          $table->string('tgl_beli');
          $table->string('kon_mesin');
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
        Schema::drop('cars');
    }
}
