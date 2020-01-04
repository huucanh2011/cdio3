<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NgayChieu extends Model
{
    protected $table="ngaychieu";

    protected $guarded=[];

    public function suatchieu()
    {
    	return $this->hasMany('App\SuatChieu','idNgaychieu','id');
    }
}
