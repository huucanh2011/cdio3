@extends('admin.layouts.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
        Thêm
        <small>Slide</small>
      </h3>
    </section>
    <section class="content">
      <div class="row">
		<div class="col-xs-8">
			<form action="" method="post">
        @csrf
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
        		<label for="tenslide">Tên slide</label>
        		<input class="form-control" id="hinh" type="file" placeholder="Hình">
        	</div>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Không</button>
          <button type="submit" class="btn btn-success" onclick="oneClick(this)">Có</button>
        </form>
		</div>
      </div>
  	</section>

</div>
@endsection