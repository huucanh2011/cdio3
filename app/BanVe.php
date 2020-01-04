<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BanVe extends Model
{
    protected $table="banve";
    
    protected $guarded=[];

    public function taikhoan()
    {
    	return $this->belongsTo('App\TaiKhoan','idTaiKhoan','id');
    }

    public function ghe()
    {
    	return $this->belongsTo('App\Ghe','idGhe','id');
    }
}
