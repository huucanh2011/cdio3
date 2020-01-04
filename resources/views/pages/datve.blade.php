@extends('layouts.index')
@section('content')
<div class="container-fulid bg2" style="margin-top:20px; padding: 0px 30px;">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
			  <div class="panel-heading">Chọn ghế</div>
			  <div class="panel-body">
			  <div class="text-center screen">Màn hình</div>
				<div class="text-center">
			  	<?php $dem = 0; ?>
			  	@foreach($suatchieu->rap()->first()->ghe()->orderby('hang','asc')->get() as $ghe)
			  		<?php $dem += 1; $array = array(1,2,3,4,5,6,7,8,9,10); $arrlength=count($array);?>
			  		<span class="btn btn-2 @if($ghe->Gia==80000) ghe_vip @endif  @if($ghe->TrangThai==1) ghe_da_dat" disabled @else chonghe" @endif id-ghe="{{$ghe->id}}" chon="false">{{$ghe->Cot}}{{$ghe->Hang}}</span>
			  		<?php
			  			for($i=0; $i<=$arrlength; $i++)
			  			{
			  				if(($i*10)==$dem)echo"<br>";
			  			}
			  		?>
			  	@endforeach
			  	</div>
			  	<div class="chuthichghe text-center">
			  		<ul>
			  			<li><span class="btn-2 ghe ghe_da_dat"></span><span>Ghế đã đặt</span></li>
			  			<li><span class="btn-2 ghe ghe_dang_chon"></span><span>Ghế đang chọn</span></li>
			  			<li><span class="btn-2 ghe ghe_thuong"></span><span>Ghế thường</span></li>
			  			<li><span class="btn-2 ghe ghe_vip"></span><span>Ghế Vip</span></li>
			  		</ul>
			  	</div>
			  </div>
			</div>
		</div>
		@php 
		$phim=$suatchieu->phim()->first();
		@endphp
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Thông tin vé</div>
			  <div class="panel-body">
			  	<div class="text-center">
			  		<img width="150px" height="200px" src="upload/phim/{{$phim->Hinh}}">
			  	</div>
			  	<p><b>Phim:</b>&nbsp;{{$phim->TenPhim}}</p>
			  	<p><b>Độ tuổi phù hợp:</b>&nbsp;{{$phim->DoTuoiPhuHop}}</p>
			  	<p><b>Rạp:</b>&nbsp;{{$suatchieu->rap()->first()->TenRap}}</p>
			  	<p><b>Suất chiếu:</b>&nbsp;{{$suatchieu->GioChieu}} | <b>Ngày:</b> {{$suatchieu->ngaychieu()->first()->NgayChieu}}</p>
			  	<p><b>Ghế:</b>
			  		<div class="hien_ghe">
			  		</div>
			  	</p>
			  	<p><b>Giá vé:</b>
			  		<div class="thanh_tien">

			  		</div>
			  	</p>
			  	<a class="btn btn-block btn-1 btn-thanhtien">Thành tiền&nbsp;<span class="glyphicon glyphicon-ok"></span></a>
			  </div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('script')
<script>
	$(document).ready(function() {
		function getMangGhe()
		{
			var mang = [];
			$('.hien_ghe span').each(function(index, el) {
				var id = $(this).attr('data-id');
				mang.push(id);
			});
			return mang;
		}
		$('.btn-thanhtien').click(function(event) {
			event.preventDefault();
			var mangghe = getMangGhe();
			if(mangghe.length==0)
			{
				alert('Bạn chưa chọn ghế nào!');
				return false;
			}
			else{
				$.ajaxSetup({
	            headers: {
	               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            }
		        });
		        $.ajax({
		            url : 'ajax/cart/add',
		            type: 'POST',
		            data: {mangghe:mangghe},
		            success:function(data)
		            {
		                $('.thanh_tien').html(data);
		            }
		        });
			}
		});
		$('.chonghe').click(function(event) {
			var chon = $(this).attr('chon');
			var ghe = $(this).text();
			var idghe = $(this).attr('id-ghe');
			if(chon=="false")
			{
				$(this).attr('chon','true');
				$('.hien_ghe').append('<span class="btn btn-2" data-id='+idghe+'>'+ghe+'</span>');
				var mangghe = getMangGhe();
				$('.thanh_tien').append('<span class="tien"></span>');
				// $.ajaxSetup({
	   //            headers: {
	   //              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	   //            }
	   //          });
	   //          $.ajax({
	   //             url : 'ajax/thanhtien',
	   //             type: 'POST',
	   //             data: {idghe:idghe,mangghe:mangghe},
	   //             success:function(data)
	   //             {
	   //             	// console.log(data);
	   //                $('.tien').html(data);
	   //             }
	   //          });
			}
			else
			{
				$(this).attr('chon','false');
				$('.hien_ghe span[data-id='+idghe+']').remove();
				var mangghe = getMangGhe();
				$('.thanh_tien span[id-ghe='+idghe+']').remove();
			}
			$(this).toggleClass('ghe_dang_chon');			
		});
	});
</script>
@endsection