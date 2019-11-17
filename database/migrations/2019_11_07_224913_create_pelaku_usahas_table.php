<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelakuUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelaku_usahas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenis');
            $table->string('kategori');
            $table->string('nama_pelaku');
            $table->string('kecamatan');
            $table->string('bulan');
            $table->string('penyuluh');
            $table->string('alamat');
            $table->string('tahun_berdiri');
            $table->string('legalitas');
            $table->string('no_hp');
            $table->string('jml_kelompok');
            $table->string('kelas_kelompok');
            $table->integer('jml_produksi');
            $table->integer('harga_produk');
            $table->integer('nilai_produksi');
            $table->integer('jml_pekerja');
            $table->string('status_pekerja');
            $table->integer('pendapatan_per_bulan');
            $table->integer('pengeluaran_per_bulan');
            $table->string('nama_bantuan');
            $table->string('sumber_bantuan');
            $table->string('tahun_bantuan');
            $table->string('keterangan');
            $table->string('pemasaran');
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
        Schema::dropIfExists('pelaku_usahas');
    }
}
