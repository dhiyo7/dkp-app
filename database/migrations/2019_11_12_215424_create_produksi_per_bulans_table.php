<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksiPerBulansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi_per_bulans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelaku');
            $table->string('bahan_baku_utama');
            $table->integer('nilai_bahan_baku_utama');
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
        Schema::dropIfExists('produksi_per_bulans');
    }
}
