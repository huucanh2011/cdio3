<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

use App\User;
use DB;

class PagesAdminController extends Controller
{
	public function __construct()
	{
		$taikhoan = User::all();

		view()->share('taikhoan',$taikhoan);
	}
    public function getIntro()
    {
    	$taikhoan = null;
    	if(Auth::check())
    	{
    		$taikhoan = Auth::user();
    	}
    	return view('admin.intro',compact('taikhoan'));
    }
}
