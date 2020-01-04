  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="upload/user/{{Auth::user()->Hinh}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->HoTen}}</p>
          <h6><i class="fa fa-circle text-success"></i> Online</h6>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><span>Quản trị viên</span></li>
        <li class="active">
          <a href="admin/intro">
            <i class="fa fa-dashboard"></i> <span>Bảng điều khiển</span>
          </a>
        </li>
        <li>
          <a href="admin/phanquyen">
            <i class="fa fa-gavel"></i> <span>Phân quyền</span>
          </a>
        </li>
        <li class="header">Quản lý chung</li>
        <li>
          <a href="admin/slide">
            <i class="fa fa-sliders"></i><span>Slide</span>
          </a>
        </li>
        <li>
          <a href="admin/quyen">
            <i class="fa fa-gavel"></i><span>Quyền</span>
          </a>
        </li>
        <li>
          <a href="admin/taikhoan">
            <i class="fa fa-users"></i><span>Tài khoản</span>
          </a>
        </li>
        <li class="header">Quản lý</li>
        <li>
          <a href="admin/danhgia">
            <i class="fa fa-star"></i><span>Đánh giá</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li>
          <a href="admin/vedadat">
            <i class="fa fa-ticket"></i><span>Vé đã đặt</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">10</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-film"></i>
            <span>Phim</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/theloaiphim"><i class="fa fa-circle-o"></i> Thể loại</a></li>
            <li><a href="admin/phim"><i class="fa fa-circle-o"></i> Phim</a></li>
            <li><a href="admin/tintuc"><i class="fa fa-circle-o"></i> Tin tức</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Rạp</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin/rap"><i class="fa fa-circle-o"></i> Rạp</a></li>
            <li><a href="admin/suatchieu"><i class="fa fa-circle-o"></i> Suất chiếu</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>