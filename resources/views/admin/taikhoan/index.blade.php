@extends('admin.layouts.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        Danh sách
        <small>Tài khoản</small>
      </h3>
    </section>

	<section class="content">
      <div class="row">
        <div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <button data-toggle="modal" data-target="#modal_createtaikhoan" class="btn btn-primary"><span class="fa fa-plus"></span> Thêm</button>
              @include('admin.layouts.errors')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data_table" class="table table-bordered table-striped table-responsive table-condensed">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>Họ và tên</th>
                  <th>Giới tính</th>
                  <th>Mã thẻ</th>
                  <th>Quyền</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Tuỳ chọn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($taikhoans as $tk)
	                <tr>
	                  <td>{{$tk->email}}</td>
	                  <td>{{$tk->HoTen}}</td>
	                  <td>{{$tk->GioiTinh==1?'Nam':'Nữ'}}</td>
	                  <td>Mã thẻ</td>
	                  <td>{{$tk->quyen()->first()->TenQuyen}}</td>
	                  <td>{{$tk->created_at}}</td>
	                  <td>{{$tk->updated_at}}</td>
	                  <td>
	                  	<a href="" class="btn btn-info">
	                  		<span class="fa fa-eye"></span>
	                  	</a>
	                  	<button class="btn btn-primary" data-toggle="modal" data-target="#modal_updateslide" data-id="{{$tk->id}}">
	                  		<span class="fa fa-edit"></span>
	                  	</button>
	                  	<button class="btn btn-danger btn_xoa" data-id="{{$tk->id}}" data-toggle="modal" data-target="#modal_delete">
	                  		<span class="fa fa-trash-o"></span>
	                  	</button>
	                  </td>
	                </tr>
	            @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Email</th>
                  <th>Họ và tên</th>
                  <th>Giới tính</th>
                  <th>Mã thẻ</th>
                  <th>Quyền</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Tuỳ chọn</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
	</div>
	</section>
</div>

<div class="modal fade" id="modal_createtaikhoan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title text-center"><b>Thêm slide</b></h4>
      </div>
      <form action="admin/slide" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
        	<div class="form-group">
        		<label for="tenslide">Tên</label>
        		<input class="form-control" name="Ten" id="tenslide" type="text" placeholder="Tên">
        	</div>
        	<div class="form-group">
        		<label for="noidung">Nội dung</label>
        		<input class="form-control" name="NoiDung" id="noidung" type="text" placeholder="Nội dung">
        	</div>
        	<div class="form-group">
        		<label for="noidung">Link</label>
        		<input class="form-control" name="Link" id="link" type="text" placeholder="Link">
        	</div>
        	<div class="form-group">
        		<label for="noidung">Hình</label>
        		<input class="form-control" name="Hinh" id="hinh" type="file" placeholder="Hình">
        	</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Huỷ</button>
          <button type="reset" class="btn btn-default">Làm mới</button>
          <button type="submit" class="btn btn-success" onclick="oneClick(this)"><span class="fa fa-plus"></span> Thêm</button>
          </div>
        </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal_updateslide">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title text-center"><b>Cập nhật slide</b></h4>
      </div>
      <form action="" method="post">
        @csrf
        @method('patch')
        <div class="modal-body">
        	<div class="form-group">
        		<label for="tenslide">Tên</label>
        		<input class="form-control" id="tenslide" type="text" placeholder="Tên">
        	</div>
        	<div class="form-group">
        		<label for="tenslide">Nội dung</label>
        		<input class="form-control" id="noidung" type="text" placeholder="Nội dung">
        	</div>
        	<div class="form-group">
        		<label for="tenslide">Link</label>
        		<input class="form-control" id="link" type="text" placeholder="Link">
        	</div>
        	<div class="form-group">
        		<label for="tenslide">Hình</label>
        		<input class="form-control" id="hinh" type="file" placeholder="Hình">
        	</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
          <button type="submit" class="btn btn-success" onclick="oneClick(this)"><span class="fa fa-edit"></span> Cập nhật</button>
          </div>
        </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@include('admin.layouts.modaldelete')

@endsection
@push('script')
<script>
$(document).ready(function() {
	$('.btn_xoa').click(function(event) {
		event.preventDefault()
		var id = $(this).attr('data-id')
        $('#modal_delete form').attr('action','admin/slide/'+id)
	});
    // $('body').on('click','.btn_xoa',function(e){
    // 	e.preventDefault()
        
    // });
});
</script>
@endpush