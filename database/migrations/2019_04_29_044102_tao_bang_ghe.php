<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangGhe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('Ghe', function(Blueprint $table){
            $table->increments('id');
            $table->string('Cot');
            $table->string('Hang');
            $table->double('Gia',7,2);
            $table->boolean('TrangThai')->default(0);
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
        Schema::dropIfExists('Ghe');
    }
}
