<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksiTambaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi_tambaks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('bulan');
            $table->string('penyuluh');
            $table->integer('pro_rumput_laut')->default(0)->nullable();
            $table->integer('nil_rumput_laut')->default(0)->nullable();
            $table->integer('pro_udang_vaname_sederhana')->default(0)->nullable();
            $table->integer('nil_udang_vaname_sederhana')->default(0)->nullable();
            $table->integer('pro_udang_vaname_semi')->default(0)->nullable();
            $table->integer('nil_udang_vaname_semi')->default(0)->nullable();
            $table->integer('pro_udang_vaname_intensif')->default(0)->nullable();
            $table->integer('nil_udang_vaname_intensif')->default(0)->nullable();
            $table->integer('pro_udang_windu')->default(0)->nullable();
            $table->integer('nil_udang_windu')->default(0)->nullable();
            $table->integer('pro_bandeng')->default(0)->nullable();
            $table->integer('nil_bandeng')->default(0)->nullable();
            $table->integer('pro_mujair')->default(0)->nullable();
            $table->integer('nil_mujair')->default(0)->nullable();
            $table->integer('pro_kakap')->default(0)->nullable();
            $table->integer('nil_kakap')->default(0)->nullable();
            $table->integer('pro_kepiting')->default(0)->nullable();
            $table->integer('nil_kepiting')->default(0)->nullable();
            $table->integer('pro_kerang_darah')->default(0)->nullable();
            $table->integer('nil_kerang_darah')->default(0)->nullable();
            $table->integer('pro_udang_putih')->default(0)->nullable();
            $table->integer('nil_udang_putih')->default(0)->nullable();
            $table->integer('pro_nila')->default(0)->nullable();
            $table->integer('nil_nila')->default(0)->nullable();
            $table->integer('pro_blanak')->default(0)->nullable();
            $table->integer('nil_blanak')->default(0)->nullable();
            $table->integer('pro_koi')->default(0)->nullable();
            $table->integer('nil_koi')->default(0)->nullable();
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
        Schema::dropIfExists('produksi_tambaks');
    }
}
