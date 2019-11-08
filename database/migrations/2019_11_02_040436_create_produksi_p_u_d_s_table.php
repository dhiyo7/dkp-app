<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksiPUDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi_p_u_d_s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('bulan');
            $table->integer('pro_lele')->default(0)->nullable();
            $table->integer('nil_lele')->default(0)->nullable();
            $table->integer('pro_nila')->default(0)->nullable();
            $table->integer('nil_nila')->default(0)->nullable();
            $table->integer('pro_kaper')->default(0)->nullable();
            $table->integer('nil_kaper')->default(0)->nullable();
            $table->integer('pro_nilem')->default(0)->nullable();
            $table->integer('nil_nilem')->default(0)->nullable();
            $table->integer('pro_gurame')->default(0)->nullable();
            $table->integer('nil_gurame')->default(0)->nullable();
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
        Schema::dropIfExists('produksi_p_u_d_s');
    }
}
