@extends('admin.layouts.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        Danh sách
        <small>Rạp/Ghế</small>
      </h3>
    </section>

	<section class="content">
    <div class="row">
        <div class="col-xs-12">
			    <div class="box box-primary">
            <div class="box-header">
              <h5>Rạp</h5>
              <button data-toggle="modal" data-target="#modal_createtintuc" class="btn btn-primary"><span class="fa fa-plus"></span> Thêm</button>
              @include('admin.layouts.errors')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data_table" class="table table-bordered table-striped table-responsive table-condensed">
                <thead>
                <tr>
                  <th>#ID</th>
                  <th>Tên rạp</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Tuỳ chọn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rap as $r)
	                <tr>
	                  <td>{{$r->id}}</td>
	                  <td>{{$r->TenRap}}</td>
	                  <td>{{$r->created_at}}</td>
	                  <td>{{$r->updated_at}}</td>
	                  <td>
	                  	<button class="btn btn-primary" data-toggle="modal" data-target="#modal_updateslide" data-id="{{$r->id}}">
	                  		<span class="fa fa-edit"></span>
	                  	</button>
	                  	<button class="btn btn-danger btn_xoaa" data-id="{{$r->id}}" data-toggle="modal" data-target="#modal_delete">
	                  		<span class="fa fa-trash-o"></span>
	                  	</button>
	                  </td>
	                </tr>
	            @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#ID</th>
                  <th>Tên rạp</th>
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
          <div class="box box-success">
            <div class="box-header">
              <h5>Ghế</h5>
              <button data-toggle="modal" data-target="#modal_createghe" class="btn btn-primary"><span class="fa fa-plus"></span> Thêm</button>
              @include('admin.layouts.errors')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data_table1" class="table table-bordered table-striped table-responsive table-condensed">
                <thead>
                <tr>
                  <th>#ID</th>
                  <th>Tên ghế</th>
                  <th>Giá ghế</th>
                  <th>Trạng thái</th>
                  <th>Rạp</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Tuỳ chọn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ghe as $g)
	                <tr>
	                  <td>{{$g->id}}</td>
	                  <td>{{$g->Cot}}{{$g->Hang}}</td>
	                  <td>{{$g->Gia}}</td>
	                  <td>{{$g->TrangThai==0?'Trống':'Đã đặt'}}</td>
	                  <td>{{$g->rap()->first()->TenRap}}</td>
	                  <td>{{$g->created_at}}</td>
	                  <td>{{$g->updated_at}}</td>
	                  <td>
	                  	<button class="btn btn-primary btn_capnhat" data-toggle="modal" data-target="#modal_updateghe" data-id="{{$g->id}}">
	                  		<span class="fa fa-edit"></span>
	                  	</button>
	                  	<button class="btn btn-danger btn_xoa" data-id="{{$g->id}}" data-toggle="modal" data-target="#modal_delete">
	                  		<span class="fa fa-trash-o"></span>
	                  	</button>
	                  </td>
	                </tr>
	            @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#ID</th>
                  <th>Tên ghế</th>
                  <th>Giá ghế</th>
                  <th>Trạng thái</th>
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
		    </div>
	  </div>
	</section>

</div>

@include('admin.layouts.modaldelete')

<div class="modal fade" id="modal_createghe">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title text-center"><b>Thêm ghế</b></h4>
      </div>
      <div class="modal-body">
        <form action="admin/ghe" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="tencot">Cột</label>
            <input class="form-control" name="cot" id="tencot" type="number" placeholder="Nhập cột">
          </div>
          <div class="form-group">
            <label for="tenhang">Hàng</label>
            <input class="form-control" name="hang" id="tenhang" type="text" placeholder="Nhập hàng">
          </div>
          <div class="form-group">
            <label for="gia">Giá ghế</label>
            <input class="form-control" name="gia" id="gia" type="text" placeholder="Nhập giá ghế">
          </div>
          <div class="form-group">
            <label for="rap">Chọn rạp</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Chọn rạp" id="rap" name="idrap">
              @foreach($rap as $r)
                <option value='{{ $r->id }}'>{{ $r->TenRap }}</option>
              @endforeach
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Huỷ</button>
            <button type="reset" class="btn btn-default">Làm mới</button>
            <button type="submit" class="btn btn-success" onclick="oneClick(this)"><span class="fa fa-plus"></span> Thêm</button>
          </div>
        </form>
      </div>
      <!-- /.modal-body -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal_updateghe">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title text-center"><b>Cập nhật ghế</b></h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          @csrf
          <div class="form-group">
            <label for="tencot">Cột</label>
            <input class="form-control" name="cot" id="tencot" type="number" placeholder="Nhập cột">
          </div>
          <div class="form-group">
            <label for="tenhang">Hàng</label>
            <input class="form-control" name="hang" id="tenhang" type="text" placeholder="Nhập hàng">
          </div>
          <div class="form-group">
            <label for="gia">Giá ghế</label>
            <input class="form-control" name="gia" id="gia" type="text" placeholder="Nhập giá ghế">
          </div>
          <div class="form-group">
            <label for="rap">Chọn rạp</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Chọn rạp" id="rap" name="idrap">
              @foreach($rap as $r)
                <option value='{{ $r->id }}'>{{ $r->TenRap }}</option>
              @endforeach
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
            <button type="submit" class="btn btn-success" onclick="oneClick(this)"><span class="fa fa-edit"></span> Cập nhật</button>
          </div>
        </form>
      </div>
      <!-- /.modal-body -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection
@section('script')
<script>
$(document).ready(function() {
  //Initialize Select2 Elements
  $('.select2').select2()
	$('.btn_xoa').click(function(event) {
		event.preventDefault()
		var id = $(this).attr('data-id')
      $('#modal_delete form').attr('action','admin/ghe/'+id)
	});

  $('.btn_capnhat').click(function(event) {
    event.preventDefault();
    var id = $(this).attr('data-id');
    $('#modal_updateghe form').attr('action','admin/ghe/'+id'/edit');
  });
});
</script>
@endsection