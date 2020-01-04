<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoaiPhim extends Model
{
    protected $table="theloaiphim";

    protected $guarded=[];

    public function phim()
    {
        return $this->hasMany('App\Phim','idTheLoaiPhim','id');
    }
}
