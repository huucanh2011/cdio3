<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\TinTucPhim;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $tintuc = TinTucPhim::all();

        view()->share('tintuc',$tintuc);
    }

    public function index()
    {
        $taikhoan = null;
        if(Auth::check())
            $taikhoan = Auth::user();
        return view('admin.tintuc.index',compact('taikhoan'));
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
        $this->validate($request,
            [
                'TieuDe' => 'required|min:3',
                'TomTat' => 'required|min:3|max:191',
                'NoiDung' => 'required|min:20',
                'Hinh' => 'required'
            ],
            [
                'TieuDe.required' => 'Bạn chưa nhập tiêu đề',
                'TieuDe.min' => 'Tiêu đề có ít nhất :min ký tự',
                'TomTat.required' => 'Bạn chưa nhập tóm tắt',
                'TomTat.min' => 'Tóm tắt có ít nhất :min ký tự',
                'TomTat.max' => 'Tóm tắt có nhiều nhất :max ký tự',
                'NoiDung.required' => 'Bạn chưa nhập nội dung',
                'NoiDung.min' => 'Nội dung có ít nhất :min ký tự',
                'Hinh.required' => 'Bạn chưa chọn hình'
            ]
        );
        $Hinh='';
        if($request->hasFile('Hinh'))
        {
            $file=$request->file('Hinh');
            $duoi=$file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg' && $duoi != 'gif')
            {
                return back()->with(['thongbao'=>'Bạn chỉ được chọn đuôi jpg png jpeg gif','type'=>'danger']);
            }
            $name=$file->getClientOriginalName();
            $Hinh= str_random(4)."_".$name;
            while(file_exists("upload/tintuc/".$Hinh))
            {
                $Hinh= str_random(4)."_".$name;
            }
            $file->move("upload/tintuc/",$Hinh);
        }
        $tintuc = new TinTucPhim;
        $tintuc->TieuDe = $request->TieuDe;
        $tintuc->TomTat = $request->TomTat;
        $tintuc->NoiDung = $request->NoiDung;
        $tintuc->Hinh = $Hinh;
        $tintuc->save();
        
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
    public function destroy(TinTucPhim $tintuc)
    {
        $tintuc->delete();
        return back()->with(["thongbao"=>'Xóa thành công','type'=>"success"]);
    }
}
