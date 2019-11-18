<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSumberBahanBakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sumber_bahan_bakus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelaku');
            $table->string('jenis_bahan_baku')->nullable();
            $table->string('asal_bahan_baku')->nullable();
            $table->integer('jml_bahan_baku')->nullable();
            $table->integer('harga_pcs')->nullable();
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
        Schema::dropIfExists('sumber_bahan_bakus');
    }
}
