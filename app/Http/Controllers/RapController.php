<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rap;
use App\Ghe;

class RapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $rap = Rap::all();
        $ghe = Ghe::all();

        view()->share('rap',$rap);
        view()->share('ghe',$ghe);
    }

    public function index()
    {
        $taikhoan = null;
        if(Auth::check())
            $taikhoan = Auth::user();
        return view('admin.rap.index',compact('taikhoan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function postThemGhe(Request $request)
    {
        $this->validate($request,
            [
                'cot' => 'required|max:15',
                'hang' => 'required',
                'gia' => 'required',
                'idrap' => 'required'
            ],
            [
                'cot.required' => 'Bạn chưa nhập cột',
                'cot.max' => 'Cột không được quá :max',
                'hang.required' => 'Bạn chưa nhập hàng',
                'gia.required' => 'Bạn chưa nhập giá',
                'idrap.required' => 'Bạn chưa chọn Rạp'
            ]
        );
        $ghe = new ghe;
        $ghe->Cot = $request->cot;
        $ghe->Hang = $request->hang;
        $ghe->Gia = $request->gia;
        $ghe->idRap = $request->idrap;
        $ghe->save();

        return back()->with(['thongbao1'=> 'Thêm thành công','type'=>'success']);
    }

    
}
