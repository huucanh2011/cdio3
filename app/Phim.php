<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table="phim";

    protected $guarded=[];

    public function ve()
    {
        return $this->hasMany('App\Ve','idphim','id');
    }

    public function danhgia()
    {
        return $this->hasMany('App\DanhGia','idPhim','id');
    }

    public function suatchieu()
    {
        return $this->hasMany('App\SuatChieu','idPhim','id');
    }

    public function theloai()
    {
        return $this->belongsTo('App\TheLoaiPhim','idTheLoaiPhim','id');
    }
}
