<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUprsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uprs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('bulan');
            $table->string('penyuluh');
            $table->integer('pro_lele')->default(0)->nullable();
            $table->integer('nil_lele')->default(0)->nullable();
            $table->integer('pro_bandeng')->default(0)->nullable();
            $table->integer('nil_bandeng')->default(0)->nullable();
            $table->integer('pro_vaname')->default(0)->nullable();
            $table->integer('nil_vaname')->default(0)->nullable();
            $table->integer('pro_windu')->default(0)->nullable();
            $table->integer('nil_windu')->default(0)->nullable();
            $table->integer('pro_nila')->default(0)->nullable();
            $table->integer('nil_nila')->default(0)->nullable();
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
        Schema::dropIfExists('uprs');
    }
}
