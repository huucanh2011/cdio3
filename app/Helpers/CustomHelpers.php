<?php
use Carbon\Carbon;
use App\Ghe;
use Illuminate\Support\Facades\Auth;

function getgia($idghe){
	$max_gia=0;
	$max_item=0;
	if(Ghe::where('id',$idghe)->count()>0){
		foreach(Ghe::where('id',$idghe)->get() as $item){
			if( $item->TrangThai==0 && $item->Gia>$max_gia){
				$max_gia=$item->Gia;
				$max_item=$item;
			}
		}
	}
	return $max_item;
}

function getTongTienCart($cart){
	$tong=0 ;
	foreach($cart as $item)
	{
		if(getgia($item->id)==null)
		{

		}
		else{
			$tong=$tong+ getgia($item->id)->Gia * $item->qty;
		}
	}
	return $tong;
}