<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rap extends Model
{
    protected $table="rap";

    protected $guarded=[];

    public function ghe()
    {
        return $this->hasMany('App\Ghe','idRap','id');
    }

    public function suatchieu()
    {
        return $this->hasMany('App\SuatChieu','idRap','id');
    }
}
