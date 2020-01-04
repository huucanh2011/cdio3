<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table="taikhoan";

    protected $guarded=[];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function danhgia()
    {
        return $this->hasMany('App\DanhGia','idTaiKhoan','id');
    }
    
    public function banve()
    {
        return $this->hasMany('App\BanVe','idTaiKhoan','id');
    }

    public function quyen()
    {
        return $this->belongsTo('App\Quyen','idQuyen','id');
    }
}
