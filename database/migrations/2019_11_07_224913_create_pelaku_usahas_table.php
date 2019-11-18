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
            $table->string('jml_kelompok')->nullable();
            $table->string('kelas_kelompok')->nullable();
            $table->integer('jml_produksi')->nullable();
            $table->integer('harga_produk')->nullable();
            $table->integer('nilai_produksi')->nullable();
            $table->integer('jml_pekerja')->nullable();
            $table->string('status_pekerja')->nullable();
            $table->integer('pendapatan_per_bulan')->nullable();
            $table->integer('pengeluaran_per_bulan')->nullable();
            $table->string('nama_bantuan')->nullable();
            $table->string('sumber_bantuan')->nullable();
            $table->string('tahun_bantuan')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('pemasaran')->nullable();
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
