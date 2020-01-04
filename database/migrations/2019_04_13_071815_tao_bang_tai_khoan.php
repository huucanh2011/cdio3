<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangTaiKhoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TaiKhoan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('HoTen');
            $table->string('MaTheNH')->nullable();
            $table->boolean('GioiTinh');
            $table->date('NgaySinh')->nullable();
            $table->string('Hinh')->nullable();
            $table->string('CMND')->nullable();
            $table->string('Sdt');
            $table->string('ThanhPho')->nullable();
            $table->string('Quan')->nullable();
            $table->string('DiaChi')->nullable();
            $table->integer('idQuyen')->unsigned();
            $table->foreign('idQuyen')->references('id')->on('Quyen');
            $table->rememberToken();
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
        Schema::dropIfExists('TaiKhoan');
    }
}
