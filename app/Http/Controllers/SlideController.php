<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Slide;
use File;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $slides = Slide::all();

        view()->share('slides',$slides);
    }

    public function index()
    {
        $taikhoan = null;
        if(Auth::check())
        {
            $taikhoan = Auth::user();
        }
        return view('admin.slide.index',compact('taikhoan'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taikhoan = null;
        if(Auth::check())
        {
            $taikhoan = Auth::user();
        }
        return view('admin.slide.create',compact('taikhoan'));
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
            'Ten' => 'required|min:3',
            'NoiDung' => 'required|min:3',
            'Hinh' => 'required',
            'Link'=>   'required',
        ],[
            'Ten.required'=>'Bạn chưa nhập tên',
            'Ten.min'=>'Tên phải có ít nhất :min kí tự',
            'NoiDung.required'=>'Bạn chưa nhập nội dung',
            'NoiDung.required'=>'Nội dung phải có ít nhất 3 ký tự',
            'Hinh.required'=>'Bạn chưa chọn hình',
            'Link.required'=>'Bạn chưa nhập link',
        ]);
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
            while(file_exists("upload/slide/".$Hinh))
            {
                $Hinh= str_random(4)."_".$name;
            }
            $file->move("upload/slide/",$Hinh);
        }
        Slide::create($request->only(['Ten','NoiDung','Link'])+['Hinh'=>$Hinh]);

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
    public function destroy(Slide $slide)
    {
        $slide->delete();
        return back()->with(['thongbao'=>'Xoá thành công','type'=>'success']);
    }
}
