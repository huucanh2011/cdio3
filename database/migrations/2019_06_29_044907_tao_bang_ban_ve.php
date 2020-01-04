<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangBanVe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('BanVe', function(Blueprint $table){
            $table->increments('id');
            $table->integer('SoLuong')->unsigned();
            $table->double('ThanhTien',8,2);
            $table->date('NgayBan');
            $table->integer('idGhe')->unsigned();
            $table->foreign('idGhe')->references('id')->on('Ghe');
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
        Schema::dropIfExists('BanVe');
    }
}
