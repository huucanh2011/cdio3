<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangPhim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Phim', function(Blueprint $table){
            $table->increments('id');
            $table->string('TenPhim');
            $table->string('Hinh');
            $table->longtext('NoiDung')->nullable();
            $table->string('DaoDien')->nullable();
            $table->string('QuocGiaSanXuat')->nullable();
            $table->string('NgonNgu')->nullable();
            $table->string('Trailer');
            $table->integer('ThoiGian')->unsigned();
            $table->date('NgayKhoiChieu');
            $table->date('NgayKetThuc');
            $table->integer('DoTuoiPhuHop')->unsigned();
            $table->integer('idTheLoaiPhim')->unsigned();
            $table->foreign('idTheLoaiPhim')->references('id')->on('TheLoaiPhim');
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
        Schema::dropIfExists('Phim');
    }
}
