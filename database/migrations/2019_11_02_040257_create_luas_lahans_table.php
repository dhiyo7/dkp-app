<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuasLahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luas_lahans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('bulan');
            $table->string('penyuluh');
            $table->integer('jml_rtp_tambak_sederhana')->default(0)->nullable();
            $table->integer('luas_tambak_sederhana')->default(0)->nullable();
            $table->integer('jml_rtp_tambak_semi')->default(0)->nullable();
            $table->integer('luas_tambak_semi')->default(0)->nullable();
            $table->integer('jml_rtp_tambak_intensif')->default(0)->nullable();
            $table->integer('luas_tambak_intensif')->default(0)->nullable();
            $table->integer('jml_rtp_kolam')->default(0)->nullable();
            $table->integer('luas_kolam')->default(0)->nullable();
            $table->integer('jml_rtp_rumput_laut')->default(0)->nullable();
            $table->integer('jml_lahan_rumput_laut')->default(0)->nullable();
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
        Schema::dropIfExists('luas_lahans');
    }
}
