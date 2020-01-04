<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Quyen;

class QuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $quyen = Quyen::all();

        view()->share(compact('quyen'));
    }

    public function index()
    {
        $taikhoan = null;
        if(Auth::check())
            $taikhoan = Auth::user();
        return view('admin.quyen.index',compact('taikhoan'));
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
        $request->validate([
            'Ten' => 'required|min:3'
        ],[
            'Ten.required'=>'Bạn chưa nhập tên',
            'Ten.min'=>'Tên phải có ít nhất :min kí tự'
        ]);
        $quyen = new Quyen;
        $quyen->TenQuyen = $request->Ten;
        $quyen->save();

        return back()->with(['thongbao'=>'Thêm thành công','type'=>'success']);
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
    public function destroy(Quyen $quyen)
    {
        $quyen->delete();
        return back()->with(['thongbao'=>'Xoá thành công','type'=>'success']);
    }
}
