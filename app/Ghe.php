<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
    protected $table="ghe";

    protected $guarded=[];

    public function banve()
    {
        return $this->hasMany('App\BanVe','idGhe','id');
    }
    
    public function rap()
    {
        return $this->belongsTo('App\Rap','idRap','id');
    }
}
