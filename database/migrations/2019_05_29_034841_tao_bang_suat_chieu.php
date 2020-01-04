<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangSuatChieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SuatChieu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('GioChieu');
            $table->integer('idNgaychieu')->unsigned();
            $table->foreign('idNgaychieu')->references('id')->on('NgayChieu');
            $table->integer('idPhim')->unsigned();
            $table->foreign('idPhim')->references('id')->on('Phim');
            $table->integer('idRap')->unsigned();
            $table->foreign('idRap')->references('id')->on('Rap');
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
        Schema::dropIfExists('SuatChieu');
    }
}
