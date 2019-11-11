<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksiPengolahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi_pengolahans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('kecamatan');
            $table->string('bulan');
            $table->string('penyuluh');
            $table->string('alamat');
            $table->integer('jenis_olahan');
            $table->string('produk_olahan');
            $table->integer('produksi')->default(0);
            $table->integer('nil_produksi')->default(0);
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('produksi_pengolahans');
    }
}
