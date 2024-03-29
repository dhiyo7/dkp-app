<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengurusPendataansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus_pendataans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelaku');
            $table->string('ketua')->nullable();
            $table->string('sekretaris')->nullable();
            $table->string('bendahara')->nullable();
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
        Schema::dropIfExists('pengurus_pendataans');
    }
}
