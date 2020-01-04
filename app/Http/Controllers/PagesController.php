<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

use App\Slide;
use App\User;
use App\Phim;
use App\TinTucPhim;
use App\TheLoaiPhim;
use App\NgayChieu;
use App\SuatChieu;
use App\BanVe;
use Carbon\Carbon;
use DB;

class PagesController extends Controller
{
    public function __construct(){
        $slide = Slide::all();
        $phimall = Phim::all();
        $ngaychieuall = NgayChieu::all();
        $suatchieuall = SuatChieu::all();
        $tintucall = TinTucPhim::all();
        $taikhoan_all = User::orderby('idQuyen','asc')->orderby('HoTen','asc')->get();
        
        view()->share('slide',$slide);
        view()->share('phimall',$phimall);
        view()->share('ngaychieuall',$ngaychieuall);
        view()->share('suatchieuall',$suatchieuall);
        view()->share('tintucall',$tintucall);
        view()->share('taikhoan_all',$taikhoan_all);
    }

    function trangchu(){
        $taikhoan=null;
        if(Auth::check()){
            $taikhoan = Auth::user();
        }
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        
        $phimdangchieu = Phim::where('NgayKhoiChieu','<=',$ngayhientai)->where('NgayKetThuc','>=',$ngayhientai)
            ->orderby('NgayKhoiChieu','desc')->take(4)->get();
        $phimsapchieu = Phim::where('NgayKhoiChieu','>',$ngayhientai)
            ->orderby('NgayKhoiChieu','asc')->take(4)->get();
        $tintuc = TinTucPhim::orderby('created_at','desc')->take(4)->get();
        return view('pages.trangchu',['taikhoan'=>$taikhoan,'phimdangchieu'=>$phimdangchieu,'phimsapchieu'=>$phimsapchieu,'tintuc'=>$tintuc]);
    }

    function gioithieu(){
        $taikhoan=null;
        if(Auth::check()){
            $taikhoan = Auth::user();
        }
        return view('pages.gioithieu',['taikhoan'=>$taikhoan]);
    }

    function getMuaVe(){
        $taikhoan=null;
        if(Auth::check()){
            $taikhoan = Auth::user();
        }
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $phim = Phim::where('NgayKhoiChieu','<=',$ngayhientai)->where('NgayKetThuc','>=',$ngayhientai)
            ->orderby('ngayKhoichieu','desc')->get();
        return view('pages.muave',['taikhoan'=>$taikhoan,'phim'=>$phim]);
    }

    function blogphim(){
        $taikhoan=null;
        if(Auth::check()){
            $taikhoan = Auth::user();
        }
        $tintuc = TinTucPhim::orderby('created_at','desc')->get();
        return view('pages.blogphim',['taikhoan'=>$taikhoan,'tintuc'=>$tintuc]);
    }

    function getPhimDangChieu(){
        $taikhoan=null;
        if(Auth::check()){
            $taikhoan = Auth::user();
        }
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        
        $phimdangchieu = Phim::where('NgayKhoiChieu','<=',$ngayhientai)->where('NgayKetThuc','>=',$ngayhientai)
            ->orderby('NgayKhoiChieu','desc')->get();
        $phimsapchieu = Phim::where('NgayKhoiChieu','>',$ngayhientai)
            ->orderby('NgayKhoiChieu','asc')->get();
        return view('pages.phimdangchieu',['taikhoan'=>$taikhoan,'phimdangchieu'=>$phimdangchieu,'phimsapchieu'=>$phimsapchieu]);
    }

    function getPhimSapChieu(){
        $taikhoan=null;
        if(Auth::check()){
            $taikhoan = Auth::user();
        }
        $ngayhientai = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        
        $phimdangchieu = Phim::where('NgayKhoiChieu','<=',$ngayhientai)->where('NgayKetThuc','>=',$ngayhientai)
            ->orderby('NgayKhoiChieu','desc')->get();
        $phimsapchieu = Phim::where('NgayKhoiChieu','>',$ngayhientai)
            ->orderby('NgayKhoiChieu','asc')->get();
        return view('pages.phimsapchieu',['taikhoan'=>$taikhoan,'phimdangchieu'=>$phimdangchieu,'phimsapchieu'=>$phimsapchieu]);
    }

    function getChiTietPhim($id){
        $taikhoan=null;
        if(Auth::check()){
            $taikhoan = Auth::user();
        }
        $phim = Phim::find($id);
        $tlphim = TheLoaiPhim::all();
        return view('pages.chitietphim',['phim'=>$phim,'theloai'=>$tlphim,'taikhoan'=>$taikhoan]);
    }

    function getChiTietTinTuc($id){
        $taikhoan=null;
        if(Auth::check()){
            $taikhoan = Auth::user();
        }
        $tintucphim = TinTucPhim::find($id);
        return view('pages.chitiettintuc',['tintuc'=>$tintucphim,'taikhoan'=>$taikhoan]);
    }

    function getDatve($idSuatChieu)
    {
        $suatchieu=SuatChieu::find($idSuatChieu);
        $taikhoan=null;
        if(Auth::check()){
            $taikhoan = Auth::user();
        }
        return view('pages.datve',compact('suatchieu','taikhoan'));
    }

    function getGioHang()
    {
        $taikhoan=null;
        if(Auth::check()){
            $taikhoan = Auth::user();
        }
        return view('pages.giohang',compact('taikhoan'));
    }

    function getTimKiem(Request $request){
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('Phim')
            ->where('TenPhim', 'LIKE', "%{$query}%")
            ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
               $output .= '
               <li><a href="chi-tiet-phim/'.$row->id.'">'.$row->TenPhim.'</a></li>
               ';
           }
           $output .= '</ul>';
           echo $output;
       }
    }
}
