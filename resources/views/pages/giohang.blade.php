@extends('layouts.index')
@section('content')
<div class="container bg2" style="margin-top:20px; height: 450px;">
	<h3>Giỏ hàng</h3>
	<div class="table-responsive">          
	  <table class="table table-bordered">
	    <thead>
	      <tr class="text-center">
	        <th>Tên phim</th>
	        <th>Ngày đặt</th>
	        <th>Rạp</th>
	        <th>Ghế đặt</th>
	        <th>Số lượng vé</th>
	        <th>Huỷ đặt vé</th>
	      </tr>
	    </thead>
	    <tbody>
	      @foreach(Cart::content() as $item)
	      <tr class="text-center" id="{{ $item->rowId }}">
	        <td>{{$item->options->tenphim}}</td>
	        <td>{{$item->options->ngaychieu}}</td>
	        <td>{{$item->options->rap}}</td>
	        <td>{{$item->name}}</td>
	        <td>{{$item->qty}}</td>
	        <td><a href="#"><span>&times;</span></a></td>
	      </tr>
	      @endforeach
	    </tbody>
	  </table>
	</div>
	<div class="text-right">
		<a href="#" class="btn btn-0">Đặt vé khác</a>
		<a href="#" class="btn btn-1">Thanh toán</a>
	</div>
</div>
@endsection
