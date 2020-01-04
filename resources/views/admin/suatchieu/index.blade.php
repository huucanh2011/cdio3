@extends('admin.layouts.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        Danh sách
        <small>suất chiếu</small>
      </h3>
    </section>

	  <section class="content">
      <div class="row">
        <div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <button data-toggle="modal" data-target="#modal_createsuatchieu" class="btn btn-primary"><span class="fa fa-plus"></span> Thêm</button>
              @include('admin.layouts.errors')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data_table" class="table table-bordered table-striped table-responsive table-condensed">
                <thead>
                <tr>
                  <th>#ID</th>
                  <th>Giờ chiếu</th>
                  <th>Ngày chiếu</th>
                  <th>Phim</th>
                  <th>Rạp</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Tuỳ chọn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($suatchieu as $sc)
	                <tr>
	                  <td>{{$sc->id}}</td>
	                  <td>{{$sc->GioChieu}}</td>
                      <td>{{$sc->ngaychieu()->first()->NgayChieu}}</td>
                      <td>{{$sc->phim()->first()->TenPhim}}</td>
                      <td>{{$sc->rap()->first()->TenRap}}</td>
	                  <td>{{$sc->created_at}}</td>
	                  <td>{{$sc->updated_at}}</td>
	                  <td>
	                  	<button class="btn btn-primary" data-toggle="modal" data-target="#modal_updateslide" data-id="{{$sc->id}}">
	                  		<span class="fa fa-edit"></span>
	                  	</button>
	                  	<button class="btn btn-danger btn_xoa" data-id="{{$sc->id}}" data-toggle="modal" data-target="#modal_delete">
	                  		<span class="fa fa-trash-o"></span>
	                  	</button>
	                  </td>
	                </tr>
	            @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#ID</th>
                  <th>Giờ chiếu</th>
                  <th>Ngày chiếu</th>
                  <th>Phim</th>
                  <th>Rạp</th>
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

<div class="modal fade" id="modal_createsuatchieu">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title text-center"><b>Thêm suất chiếu</b></h4>
      </div>

      <form action="admin/suatchieu" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
        	<div class="form-group">
        		<label for="giochieu">Giờ chiếu</label>
        		<input class="form-control" name="GioChieu" id="giochieu" type="text" placeholder="Nhập giờ chiếu">
        	</div>
          <div class="form-group">
            <label for="ngaychieu">Ngày chiếu</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Ngày chiếu" id="ngaychieu" name="idNgayChieu">
              @foreach($ngaychieu as $nc)
                <option value='{{ $nc->id }}'>{{ $nc->NgayChieu }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="phim">Phim</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Ngày chiếu" id="phim" name="idPhim">
              @foreach($phim as $p)
                <option value='{{ $p->id }}'>{{ $p->TenPhim }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="rap">Rạp</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Ngày chiếu" id="rap" name="idRap">
              @foreach($rap as $r)
                <option value='{{ $r->id }}'>{{ $r->TenRap }}</option>
              @endforeach
            </select>
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