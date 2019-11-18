<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomoditasPelakuUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komoditas_pelaku_usahas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelaku');
            $table->string('jenis_komoditas')->nullable();
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
        Schema::dropIfExists('komoditas_pelaku_usahas');
    }
}
