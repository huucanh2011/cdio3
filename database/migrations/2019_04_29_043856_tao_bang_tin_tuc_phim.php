<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangTinTucPhim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TinTucPhim',function(Blueprint $table){
            $table->increments('id');
            $table->string('TieuDe');
            $table->string('TomTat');
            $table->longtext('NoiDung');
            $table->string('Hinh');
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
        Schema::dropIfExists('TinTucPhim');
    }
}
