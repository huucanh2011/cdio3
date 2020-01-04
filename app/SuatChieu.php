<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuatChieu extends Model
{
    protected $table="suatchieu";

    protected $guarded=[];

    public function phim()
    {
        return $this->belongsTo('App\Phim','idPhim','id');
    }

    public function ngaychieu()
    {
        return $this->belongsTo('App\NgayChieu','idNgaychieu','id');
    }

    public function ve()
    {
        return $this->hasMany('App\Ve','idSuatChieu','id');
    }

    public function rap()
    {
        return $this->belongsTo('App\Rap','idRap','id');
    }
}
