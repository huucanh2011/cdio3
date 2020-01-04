<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangDanhGia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DanhGia', function(Blueprint $table){
            $table->increments('id');
            $table->integer('Diem')->unsigned();
            $table->string('NoiDung')->nullable();
            $table->integer('idPhim')->unsigned();
            $table->foreign('idPhim')->references('id')->on('Phim');
            $table->integer('idTaiKhoan')->unsigned();
            $table->foreign('idTaiKhoan')->references('id')->on('TaiKhoan');
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
        Schema::dopIfExists('DanhGia');
    }
}
