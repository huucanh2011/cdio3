<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\MessageBag;
use App\User;
use App\Quyen;
use File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        // $theloai=TheLoai::all();  
        // $khoahocall=KhoaHoc::all();
        // $dangkyall=DangKy::all();
        // $danhgiaall=DanhGia::all();
        // view()->share('theloai',$theloai);
        // view()->share('khoahocall',$khoahocall);
        // view()->share('dangkyall',$dangkyall);
        // view()->share('danhgiaall',$danhgiaall);
    }

    public function getPhanQuyen()
    {
        $taikhoan = User::orderby('idQuyen','asc')->get();
        $quyen = Quyen::all();
        return view('admin.taikhoan.phanquyen',compact('taikhoan','quyen'));
    }

    public function postPhanQuyen(Request $request)
    {
        $taikhoan=User::find($request->iduser);
        $taikhoan->idQuyen=$request->idquyen;
        $taikhoan->save();
        return response()->json([
          'error' => false,
          'mess'=>'Đã đổi phân quyền',
        ], 200);
    }

    public function postDangNhap(Request $request)
    {
        $rules = [
            'pass' => 'min:5'
        ];
        $message = [
            'pass.min' => 'Password phải lớn hơn :min ký tự'
        ];
        $this->validate($request, $rules, $message);
        $email = $request->input('email');
        $pass = $request->input('pass');

        if(Auth::attempt(['email' => $email, 'password' => $pass]))
        {
            // if(auth()->user()->Lock){
            //     auth()->logout();
            //     abort(402);
            // }
            return redirect('trangchu');
        }
        else
        {
            return redirect()->back()->with(['flash'=>'danger',
                'thongbao'=>'Email hoặc mật khẩu không đúng!']);
        }
    }

    public function postDangKy(Request $request)
    {
        $rules = [
            'hoten'=>'required',
            'ngaysinh'=>'required',
            'cmnd'=>'required|min:9',
            'email'=>'required|email|unique:taikhoan,email',
            'sdt'=>'required|min:10',
            'matkhau'=>'required|min:5',
            'matkhau1'=>'required|same:matkhau'
        ];
        $msg = [
            'hoten.required'=>'Vui lòng nhập họ tên',
            'ngaysinh.required'=>'Vui lòng chọn ngày sinh',
            'cmnd.required'=>'Vui lòng nhập CMND',
            'cmnd.min'=>'CMND có ít nhất :min số',
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'email.unique'=>'Email đã có người sử dụng',
            'sdt.required'=>'Vui lòng nhập số điện thoại',
            'sdt.min'=>'Số điện thoại nhỏ nhất là :min số',
            'matkhau.required'=>'Vui lòng nhập mật khẩu',
            'matkhau.min'=>'Mật khẩu tối thiểu :min ký tự',
            'matkhau1.required'=>'Vui lòng nhập mật khẩu nhập lại',
            'matkhau1.same'=>'Mật khẩu nhập lại không đúng',
        ];

        $validator = Validator::make($request->all(), $rules , $msg);

        if ($validator->fails())
        {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        }
        else
        {
            $user = new User;
            $user->HoTen = $request->hoten;
            $user->GioiTinh = $request->gioitinh;
            $user->NgaySinh = $request->ngaysinh;
            $user->CMND = $request->cmnd;
            $user->Hinh = "noimage.jpg";
            $user->email = $request->email;
            $user->Sdt = $request->sdt;
            $user->password = bcrypt($request->matkhau);
            $user->ThanhPho = $request->thanhpho;
            $user->Quan = $request->quan;
            $user->DiaChi = $request->diachi;
            $user->idQuyen = 3;
            $user->save();
        }
        return redirect('phimdangchieu');
    }

    public function getDangxuat()
    {
        Auth::logout();
        return redirect('trangchu');
    }

    public function getThongTinTaiKhoan() 
    {
        $taikhoan=null;
        if(
            Auth::check()){
            $taikhoan = Auth::user();
        }
        $taikhoan = Auth::user();
        return view('pages.thongtintaikhoan',['taikhoan'=>$taikhoan]);
    }

    public function postThongTinTaiKhoan(Request $request)
    {
        $this->validate($request,
            [
                'hoten' => 'required|min:2',
                'renewpassword'=>'same:newpassword'
            ],
            [
                'hoten.required' => 'Bạn chưa nhập họ tên',
                'hoten.min' => 'Họ tên có ít nhất :min ký tự',
                'renewpassword.same' => 'Mật khẩu nhập lại không đúng'
            ]
        );

        $user = Auth::user();
        $user->HoTen = $request->hoten;
        $user->GioiTinh = $request->gioitinh;
        $user->NgaySinh = $request->ngaysinh;
        $user->CMND = $request->cmnd;
        if($request->hasFile('Hinh'))
        {
            $oldname = $user->Hinh;
            if($oldname!='noimage.jpg')
            {
                if(File::exists("upload/user/".$oldname))
                    File::delete("upload/user".$oldname);
            }
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'jpeg' && $duoi != 'png')
                return redirect('thongtintaikhoan')->with(['flash'=>'danger','thongbao','Bạn chỉ được chọn file JPG, PNG, JPEG']);
            $name = $file->getClientOriginalName();
            $hinh = $name."_".str_random(4);
            while(file_exists("upload/user/".$hinh))
            {
                $hinh = $name."_".str_random(4);
            }
            $file->move("upload/user",$hinh);
            $user->Hinh = $hinh;
        }
        $user->Sdt = $request->sdt;
        $user->ThanhPho = $request->thanhpho;
        $user->Quan = $request->quan;
        $user->DiaChi = $request->diachi;
        if($request->checkboxdoimk==1){
            if(Hash::check($request->password, $user->password))
            {
                $user->password=bcrypt($request->newpassword); 
            }
            else
            {
                return redirect('thongtintaikhoan')->with(['flash'=>'danger','thongbao','Mật khẩu không đúng']); 
            }
        }
        $user->save();
        return redirect ('thongtintaikhoan')->with(['flash'=>'success','thongbao','Thay đổi thông tin thành công']);
    }
}
