<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetPelakuUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_pelaku_usahas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelaku');
            $table->string('sarana');
            $table->integer('jml_asset');
            $table->string('status');
            $table->integer('nil_asset');
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
        Schema::dropIfExists('asset_pelaku_usahas');
    }
}
