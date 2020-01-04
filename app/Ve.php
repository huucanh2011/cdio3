<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    protected $table="ve";

    protected $guarded=[];

    public function banve()
    {
        return $this->hasMany('App\BanVe','idVe','id');
    }
}
