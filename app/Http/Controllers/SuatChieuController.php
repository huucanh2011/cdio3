<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SuatChieu;
use App\NgayChieu;
use App\Phim;
use App\Rap;

class SuatChieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $suatchieu = SuatChieu::all();
        $ngaychieu = NgayChieu::all();
        $phim = Phim::all();
        $rap = Rap::all();

        view()->share('suatchieu',$suatchieu);
        view()->share('ngaychieu',$ngaychieu);
        view()->share('phim',$phim);
        view()->share('rap',$rap);
    }
    public function index()
    {
        return view('admin.suatchieu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'GioChieu' => 'required',
                'idNgayChieu' => 'required',
                'idPhim' => 'required',
                'idRap' => 'required'
            ],
            [
                'GioChieu.required' => 'Bạn chưa nhập giờ chiếu',
                'idNgayChieu.required' => 'Bạn chưa chọn ngày chiếu',
                'idPhim.required' => 'Bạn chưa chọn phim',
                'idRap.required' => 'Bạn chưa chọn Rạp'
            ]
        );
        $suatchieu = new SuatChieu;
        $suatchieu->GioChieu = $request->GioChieu;
        $suatchieu->idNgayChieu = $request->idNgayChieu;
        $suatchieu->idPhim = $request->idPhim;
        $suatchieu->idRap = $request->idRap;
        $suatchieu->save();
        
        return back()->with(['thongbao'=> 'Thêm thành công','type'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
