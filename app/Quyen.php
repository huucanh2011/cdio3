<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quyen extends Model
{
    protected $table="quyen";

    protected $guarded=[];

    public function taikhoan()
    {
    	return $this->hasMany('App\User','idQuyen','id');
    }
}
