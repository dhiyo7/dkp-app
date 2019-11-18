<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyuluhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyuluhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nip')->nullable();
            $table->string('kecamatan');
            $table->string('desa')->nullable();
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
        Schema::dropIfExists('penyuluhs');
    }
}
