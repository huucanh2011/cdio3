<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuatChieu;
use App\NgayChieu;
use App\Ghe;
use Cart;

class AjaxController extends Controller
{
    public function getSuatChieu(Request $request)
    {
    	$ngaychieu = $request->ngaychieu;
    	$idphim = $request->idphim;
    	$idNgayChieu = NgayChieu::where('NgayChieu',$ngaychieu)->value('id');
    	$suatchieu = SuatChieu::where('idPhim',$idphim)->where('idNgayChieu',$idNgayChieu)->get();
    	if($suatchieu->count()>0)
    	{
    		foreach($suatchieu as $sc)
	    	{
	    		echo "<a class='btn btn-suatchieu' href='datve/".$sc->id."'>".$sc->GioChieu."</a>&nbsp;&nbsp;&nbsp;";
	    	}
    	}
    	else
    	{
    		echo "Không có suất chiếu";
    	}
    }
    public function getGhe(Request $request)
    {
        $id_ghe = $request->id_ghe;
        $ghe = Ghe::find($id_ghe);
        echo $ghe->Cot.$ghe->Hang;
    }
    // int $tong = 0;
    public function getThanhTien(Request $request)
    {
        // $idghe = $request->idghe;
        $mangghe = $request->mangghe;
        foreach ($mangghe as $item) {
            if(Ghe::find($item)){
                $tong = $item->Gia;
            }
        }
        // $ghe = Ghe::find($idghe);
        // $tien = $ghe->Gia;
        dd($tong);
    }
    public function addCart(Request $request)
    {
        $mang = $request->mangghe;
        // $soluongcart=0;
        foreach ($mang as $g) {
            // $soluongcart ++;
            $ghe = Ghe::find($g);
            Cart::add(['id' => $g, 'name' => $ghe->Cot.$ghe->Hang, 'qty' => 1, 'price' => $ghe->Gia, 'options' => ['tenphim' => 'Nụ hôm ma quái','ngaychieu' => '04/06/2019','rap'=> $ghe->rap->TenRap]]);
        }
        return response()->json(['thongbao'=>'ok',],200);
        // $a = $mang[0];
        
        
        
        // foreach(Cart::content() as $item){
        //     if($item->id==$sanpham->id){
        //         $soluongcart=$item->qty;
        //     }
        // }
        // if($soluongcart+$request->soluong>10){
        //     return response()->json([
        //         'thongbao'=>false,
        //         'over'=>true,
        //     ],200);
        // }
        // $soluongton=getSoLuongTon($sanpham->id);
        // if($soluongton<$request->soluong+$soluongcart){
        //     return response()->json([
        //         'thongbao'=>false,
        //         'soluong'=>$soluongton
        //     ],200);
        // }
        // else{
            
            // $giatien=getTiLe($sanpham->id)*getbanggia($sanpham->id)->GiaBan;
            // $madotnhap=getlohangdangban($sanpham->id)->id;
            // Cart::add(['id' => $request->sanphamid, 'name' =>$sanpham->TenSanPham, 'qty' => $request->soluong, 'price' => $giatien, 'options' => ['nsx' => $sanpham->nhasanxuat->Ten,'hinh'=>$sanpham->Hinh,'madotnhap'=>$madotnhap]]);
            // return response()->json([
            //     'thongbao'=>'ok',
            // ],200);
        // }
    }
}
