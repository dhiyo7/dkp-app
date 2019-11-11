<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKolamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kolams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('bulan');
            $table->string('penyuluh');
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
            $table->integer('pro_tawes')->default(0)->nullable();
            $table->integer('nil_tawes')->default(0)->nullable();
            $table->integer('pro_mujair')->default(0)->nullable();
            $table->integer('nil_mujair')->default(0)->nullable();
            $table->integer('pro_bawal')->default(0)->nullable();
            $table->integer('nil_bawal')->default(0)->nullable();
            $table->integer('pro_belut')->default(0)->nullable();
            $table->integer('nil_belut')->default(0)->nullable();
            $table->integer('pro_udang_galah')->default(0)->nullable();
            $table->integer('nil_udang_galah')->default(0)->nullable();
            $table->integer('pro_tambakan')->default(0)->nullable();
            $table->integer('nil_tambakan')->default(0)->nullable();
            $table->integer('pro_patin')->default(0)->nullable();
            $table->integer('nil_patin')->default(0)->nullable();
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
        Schema::dropIfExists('kolams');
    }
}
