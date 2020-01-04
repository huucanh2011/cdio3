<!-- <div class="container-fluid" style="background-color:#f3f3f3f7;color:#2d2d30;">
    <p style="text-transform: uppercase; float:left; padding: 5px;">Đại học Duy Tân</p>
    <p style="text-transform: uppercase; float:right; padding: 5px;">Giờ mở cửa: 8:00 - 22:00</p>
</div> --> <!-- data-spy="affix" -->
<div class="navbar navbar-default text-uppercase" data-offset-top="100">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="trangchu" class="navbar-brand">
          <img class="img-responsive" width="75px" src="upload/logo.png" alt="LOGO">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="muave">Mua vé</a></li>
          <li class=dropdown>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Phim<span class="caret"></></a>
            <ul class="dropdown-menu">
              <li role="presentation"><a role="menuitem" href="phimdangchieu">Phim đang chiếu</a></li>
              <li role="presentation"><a role="menuitem" href="phimsapchieu">Phim sắp chiếu</a></li>
            </ul>
          </li>
          <li><a href="blogphim">Blog phim</a></li>
          <li><a href="gioithieu">Giới thiệu</a></li>
        </ul>
        <!-- <div class="navbar-form navbar-right" role="search">
          {{ csrf_field() }}
          <div class="input-group has-feedback">
            <input type="text" name="timkiem" id="timkiem" autocomplete="off" class="form-control dropdown-toggle search"
            placeholder="Từ khoá tìm kiếm..." value>
            <span class="glyphicon glyphicon-search form-control-feedback" style="color:#2d2d30"></span>
            <div id="ketqua"><br></div>
          </div>
        </div> -->
        <ul class="nav navbar-nav navbar-right">

        @if(Auth::check())
          <li><a href="giohang"><i class="glyphicon glyphicon-shopping-cart"></i> Giỏ hàng</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-html="true">
            <i class="glyphicon glyphicon-user"></i> {{$taikhoan->HoTen}}</a>
            <ul class="dropdown-menu">
              <li role="presentation"><a role="menuitem" href="{{ route('thongtintaikhoan') }}">Thông tin tài khoản</a></li>
              <?php
                if($taikhoan->idQuyen==1||$taikhoan->idQuyen==2)
                {
                  echo "<li role='presentation'><a role='menuitem' target='_blank' href='";
                  if($taikhoan->idQuyen==1) echo "admin/intro";
                  if($taikhoan->idQuyen==2) echo "nhanvien/intro";
                  echo "'>Quản lý</a></li>";
                }
              ?>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" href="dangxuat">Đăng xuất</a></li>
            </ul>
            
          </a></li>
          @else
            <li><a href="#modalDangNhap" data-toggle="modal">Đăng nhập</a></li>
            <li><a href="#modalDangKy" data-toggle="modal">Đăng ký</a></li>
          @endif
        </ul>
          
      </div>
    </div>
    
</div>

<!-- Modal Đăng nhập -->
<div id="modalDangNhap" class="modal" role="dialog" style="z-index:99999;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-user"></span> Đăng nhập</h4>
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
        <form action="dangnhap" method="post" role="form">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <input class="form-control" id="email" tabindex="4" type="email" name="email"
                placeholder="Email" value="{{old('email')}}" required>
          </div>
          <div class="form-group">
            <input class="form-control" id="password" tabindex="4" type="password" name="pass"
                placeholder="Mật khẩu" required>
          </div>
          
          <!-- <div class="form-group form-check d-flex justify-content-start p-0">
          <div class="g-recaptcha" data-sitekey="6LexALIUAAAAAL-Z3jyUon24pxnZYkKq4d-LrMeJ"></div>
          </div> -->
          <button type="submit" tabindex="4" class="btn btn-1 btn-block">Đăng nhập</button>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-1 pull-left" data-toggle="modal" data-target="#modalDangKy" data-dismiss="modal">
          <span class="glyphicon glyphicon-plus"></span> Đăng ký
        </button>
        <a class="link-a" href="#">Quên mật khẩu?</a>
      </div>
    </div>

  </div>
</div>
<!-- End Modal Đăng nhập -->

<!-- Modal Đăng ký -->
<div id="modalDangKy" class="modal" role="dialog" style="z-index:99999">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-user"></span> Đăng Ký</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger box_errors">
            <p class="errorhoten" style="font-size:15px"></p>
            <p class="errorngaysinh" style="font-size:15px"></p>
            <p class="errorcmnd" style="font-size:15px"></p>
            <p class="erroremail" style="font-size:15px"></p>
            <p class="errorsdt" style="font-size:15px"></p>
            <p class="errormatkhau" style="font-size:15px"></p>
            <p class="errormatkhau1" style="font-size:15px"></p>
        </div>
        <form role="form">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          {{method_field('post')}}
          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                <input class="form-control" type="text" id="hoten" placeholder="Họ tên">
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <select class="form-control" id="gioitinh">
                  <option disabled selected>Giới tính</option>
                  <option value="1">Nam</option>
                  <option value="0">Nữ</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                <input class="form-control" type="text" autocomplete="off" id="ngaysinh" 
                  placeholder="Ngày sinh (dd/mm/yyyy)">
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <input class="form-control" type="text" id="cmnd" placeholder="CMND">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                <input class="form-control" type="text" id="email1" placeholder="Email (Tên đăng nhập)">
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <input class="form-control" type="text" id="sdt" placeholder="Số diện thoại">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                <input class="form-control" type="password" id="matkhau" placeholder="Mật khẩu">
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <input class="form-control" type="password" id="matkhau1" placeholder="Xác nhận mật khẩu">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                <input type="hidden" id="id_city" value>
                <select id="city" class="form-control list-city">
                    <option disabled selected>Chọn thành phố</option>
                </select>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <input type="hidden" id="id_district" value>
                <select id="district" class="form-control list-district">
                  <option disabled selected>Chọn quận/huyện</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <input class="form-control" placeholder="Địa chỉ" id="diachi">
          </div>
          <div class="form-group">
            <span style="color:#7f8c8d; font-size:15px;">Tôi đã đọc và đồng ý với các
              <a class="link-a" href="#dieukhoan"> điều khoản</a>.
            </span>
          </div>

          <button id="dang-ky" type="submit" class="btn btn-1 btn-block">Đăng ký</button>
        </form>
      </div>
    </div>

  </div>
</div>
<!-- End Modal Đăng Ký -->


