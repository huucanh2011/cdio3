@extends('admin.layouts.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        Phân quyền
      </h3>
    </section>

	<section class="content">
      <div class="row">
        <div class="col-xs-12">
			    <div class="box box-primary">
            <div class="box-header">
              @include('admin.layouts.errors')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Nav tabs -->
              <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#tab_thanhvien">Thành viên</a></li>
                  <li><a data-toggle="tab" href="#tab_admin">Quản trị viên</a></li>
                  <li><a data-toggle="tab" href="#tab_nhanvien">Nhân viên</a></li>
              </ul>
                      <!-- Tab panes -->
              <div class="tab-content">
                  <div class="tab-pane active" id="tab_thanhvien">
                      <table class="table table-bordered table-striped table-responsive table-hover" id="dataTables_thanhvien">
                          <thead>
                              <tr class="text-center">
                                  <th>Email</th>
                                  <th>Họ tên</th>
                                  @foreach($quyen as $q)
                                  <th>{{ $q->TenQuyen }}</th>
                                  @endforeach
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($taikhoan->where('idQuyen',3) as $tk)
                              <tr>
                                  <td>{{$tk->email}}</td>
                                  <td>{{$tk->HoTen}}</td>
                                  @foreach($quyen as $q)
                                  <td>
                                      @if($tk->idQuyen==$q->id)
                                      <input type="radio" class='buttonradio' name="gender{{ $tk->id }}" checked value="{{ $q->id }}" iduser='{{ $tk->id }}'>
                                      @else
                                      <input type="radio" class='buttonradio' name="gender{{ $tk->id }}" value="{{ $q->id }}" iduser='{{ $tk->id }}'>
                                      @endif
                                  </td>
                                  @endforeach
                              </tr>
                              @endforeach
                          </tbody>
                          <tfoot>
                            <tr class="text-center">
                                  <th>Email</th>
                                  <th>Họ tên</th>
                                  @foreach($quyen as $q)
                                  <th>{{ $q->TenQuyen }}</th>
                                  @endforeach
                              </tr>
                          </tfoot>
                      </table>
                  </div>
                  <div class="tab-pane fade" id="tab_admin">
                      <table class="table table-striped table-responsive table-bordered table-hover" id="dataTables_admin">
                          <thead>
                              <tr class="text-center">
                                  <th>Email</th>
                                  <th>Họ tên</th>
                                  @foreach($quyen as $q)
                                  <th>{{ $q->TenQuyen }}</th>
                                  @endforeach
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($taikhoan->where('idQuyen',1) as $tk)
                              <tr class="{{ $tk->idQuyen==1?'disabledTab':'' }}">
                                  <td>{{$tk->email}}</td>
                                  <td>{{$tk->HoTen}}</td>
                                  @foreach($quyen as $q)
                                  <td>
                                      @if($tk->idQuyen==$q->id)
                                      <input type="radio" class='buttonradio' name="gender{{ $tk->id }}" checked value="{{ $q->id }}" iduser='{{ $tk->id }}'>
                                      @else
                                      <input type="radio" class='buttonradio' name="gender{{ $tk->id }}" value="{{ $q->id }}" iduser='{{ $tk->id }}'>
                                      @endif
                                  </td>
                                  @endforeach
                              </tr>
                              @endforeach
                          </tbody>
                          <tfoot>
                            <tr class="text-center">
                                  <th>Email</th>
                                  <th>Họ tên</th>
                                  @foreach($quyen as $q)
                                  <th>{{ $q->TenQuyen }}</th>
                                  @endforeach
                              </tr>
                          </tfoot>
                      </table>
                  </div>
                  <div class="tab-pane fade" id="tab_nhanvien">
                      <table class="table table-striped table-responsive table-bordered table-hover" id="dataTables_nhanvien">
                          <thead>
                              <tr class="text-center">
                                  <th>Email</th>
                                  <th>Họ tên</th>
                                  @foreach($quyen as $q)
                                  <th>{{ $q->TenQuyen }}</th>
                                  @endforeach
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($taikhoan->where('idQuyen',2) as $tk)
                              <tr>
                                  <td>{{$tk->email}}</td>
                                  <td>{{$tk->HoTen}}</td>
                                  @foreach($quyen as $q)
                                  <td>
                                      @if($tk->idQuyen==$q->id)
                                      <input type="radio" class='buttonradio' name="gender{{ $tk->id }}" checked value="{{ $q->id }}" iduser='{{ $tk->id }}'>
                                      @else
                                      <input type="radio" class='buttonradio' name="gender{{ $tk->id }}" value="{{ $q->id }}" iduser='{{ $tk->id }}'>
                                      @endif
                                  </td>
                                  @endforeach
                              </tr>
                              @endforeach
                          </tbody>
                          <tfoot>
                            <tr class="text-center">
                                  <th>Email</th>
                                  <th>Họ tên</th>
                                  @foreach($quyen as $q)
                                  <th>{{ $q->TenQuyen }}</th>
                                  @endforeach
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		    </div>
      </div>
	</section>
</div>
@endsection
@push('script')
<script>
$(function() {
  $('#dataTables_thanhvien').DataTable({
    responsive : true
  });
  $('#dataTables_admin').DataTable({
    responsive : true
  });
  $('#dataTables_nhanvien').DataTable({
    responsive : true
  });
  $('.buttonradio').click(function(event){
    var iduser = $(this).attr('iduser');
    var idquyen = $(this).val();
    if(idquyen==1)
    {
      var result = confirm('Bạn có muốn trao quyền admin cho người này?');
      if(result==true)
      {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url: 'admin/phanquyen',
          type: 'POST',
          data: {iduser:iduser, idquyen:idquyen},
          success: function(data)
          {
            console.log(data);
          }
        });
        alert('Phân quyền admin thành công!');
      }
      else
      {
        location.reload();
      }
    }
    else
    {
      var result = confirm('Bạn có chắc chắn?');
      if(result==true)
      {
        $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
            url: 'admin/phanquyen',
            type: 'POST',
            data: {iduser:iduser, idquyen:idquyen},
            success: function(data)
            {
              console.log(data);
            }
        });
        alert('Phân quyền thành công!');
      }
      else
      {
        location.reload();
      }
    }
  });
});
</script>
@endpush