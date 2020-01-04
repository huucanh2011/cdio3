@extends('layouts.index')
@section('content')
 <!-- thongtintaikhoanCss -->
<link rel="stylesheet" href="css/thongtintaikhoanCSS.css">
<div class="container-fulid" style="padding: 2rem 3.5rem">
    <div class="row">
    	<div class="col-xs-12 title"><h3>THÔNG TIN THÀNH VIÊN</h3></div>
       <form action="thongtintaikhoan" method="POST" role="form" >
        @include('admin.layouts.errors')
	   	<input type="hidden" name="_token" value="{{csrf_token()}}" />
    	<div class="col-md-4 text-center">
  			<img id="avatar-user" class="img-rounded" current-data="upload/user/{{ $taikhoan->Hinh }}" 
  				src="upload/user/{{$taikhoan->Hinh}}" height="280px" width="280px" style="border:1px solid black;">
        <input type="file" id='Hinh' name="Hinh" style="height:auto; margin-top:18px;" class="form-control" value="{{ $taikhoan->Hinh }}"><label id='chonhinh' for="Hinh">Chọn hình</label>
    	</div>	
    	<div class="col-md-8 form">
    	 	 <div class="col-md-5"><label>Họ và Tên</label>
    	 	 	<input class="form-control" id="hoten" tabindex="4" type="text" name="hoten" placeholder="Họ và tên" value="{{$taikhoan->HoTen}}" required>
    	   </div>
			   <div class="col-md-3"><label>Giới tính </label>
     	 		<select class="form-control" id="gioitinh" name="gioitinh">
				  <?php
					  if($taikhoan->GioiTinh==1)
					  {
						echo "<option value='1'>Nam</option>
						  	  <option value='0'>Nữ</option>";
					  }
					  else
					  {
						echo "<option value='0'>Nữ</option>
						      <option value='1'>Nam</option>";
					  }
				  ?>
				  </select>
     	   </div>
    	 	<div class="col-md-4"><label>Số điện thoại</label><p></p>
				<input class="form-control" type="text" name="sdt" placeholder="Số điện thoại" value="{{$taikhoan->Sdt}}" required>
    	 	</div>
      </div>
		  <div class="col-md-8 form">
     	 	<div class="col-md-5"><label>Địa chỉ </label>
     	 		<input class="form-control" type="text" placeholder="Địa chỉ" name="diachi" value="{{$taikhoan->DiaChi}}" required>
     	 	</div>
			  <div class="col-md-3"><label>Quận/Huyện</label>
				  <input type="text" class="form-control" placeholder="Quận/huyện" name="quan" value="{{$taikhoan->Quan}}" required>
    	 	</div>
     	 	<div class="col-md-4"><label>Tỉnh/Thành phố </label>
     	 		<input class="form-control" type="text" placeholder="Tỉnh/Thành phố" name="thanhpho" value="{{$taikhoan->ThanhPho}}" required>
     	 	</div>
     	</div>
     	<div class="col-md-8 form">
     	 	<div class="col-md-5"><label>Email </label>
     	 		<input class="form-control" data-toggle="tooltip" data-placement="top" title="Bạn không được thay đổi email" 
				  type="Email" name="email" id="ipt" value="{{$taikhoan->email}}" readonly>
     	 	</div>
			<div class="col-md-3"><label>Ngày sinh </label>
     	 		<input class="form-control" type="text" name="ngaysinh" id="ngaysinh" value="{{$taikhoan->NgaySinh}}">
     	</div>
     	 	<div class="col-md-4"><label>CMND/Past port</label>
				<input class="form-control" type="text" name="cmnd" placeholder="CMND/Past port" value="{{$taikhoan->CMND}}" required>
    	 	</div>
     	</div>
     	<!-- <div class="col-md-8 form">
     	 	<div class="checkbox">
     	 		<label><input type="checkbox" name="checkboxdoimk" id="checkboxdoimk" value=0><p>Đổi mật khẩu</p></label>
     	 	</div>
     	</div>
     	<div class="col-md-4"></div>
     	<div class="col-md-8 form" id="khungdoimatkhau" style="display: none;">
     		<div class="col-md-5">
     	 		<input class="form-control" type="password" placeholder="Mật khẩu hiện tại" name="password"><p></p>
     	 		<input class="form-control" type="password" placeholder="Mật khẩu mới" name="newpassword"><p></p>
     	 		<input class="form-control" type="password" placeholder="Xác nhận mật khẩu" name="renewpassword">
     	 	</div>
     	</div>
        <div class="col-md-4"></div> -->
     	<div class="col-md-8 form">
            <div class="col-md-5">
                <button type="button" class="btn btn-1" data-target="#modalDoiMK" data-toggle="modal">Đổi mật khẩu</button>
                <button type="submit" class="btn btn-1" id="btn-save"><span class="glyphicon glyphicon-ok"></span> &nbsp;Lưu</button>
            </div>
     	</div>
     	</form>
    </div>
</div>
@endsection
{{-- end-content --}}
<div id="modalDoiMK" class="modal" role="dialog" style="z-index:99999;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-user"></span> Đổi mật khẩu</h4>
      </div>
      <div class="modal-body">
        <div class="text-center">
          @if ($errors->has('pass'))
            <div class="alert alert-danger" style="font-size:15px">
              {{ $errors->first('pass') }}
            </div>
          @endif
          @if(Session::has('thongbao'))
            <div class="alert alert-{{Session::get('flash')}}" style="font-size:15px">
              {{Session::get('thongbao')}}
            </div>
          @endif
        </div>
        <form action="doimatkhau" method="post" role="form">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
              <input class="form-control" type="password" placeholder="Mật khẩu hiện tại" name="password">
          </div>
          <div class="form-group">
              <input class="form-control" type="password" placeholder="Mật khẩu mới" name="newpassword">
          </div>
          <div class="form-group">
              <input class="form-control" type="password" placeholder="Xác nhận mật khẩu" name="renewpassword">
          </div>
          <button type="submit" tabindex="4" class="btn btn-1 btn-block">Đổi mật khẩu</button>
        </form>
      </div>
    </div>

  </div>
</div>


