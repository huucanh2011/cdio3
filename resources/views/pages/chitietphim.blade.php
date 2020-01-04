<!-- thanh-->
@extends('layouts.index')
@section('content')

<div class="container bg2" style="margin-top:60px; padding: 0px 30px;">
   <div class="row padding">
      <div class="col-md-3 col-xs-12 text-center" style="padding:0;">
         <img src="upload/phim/{{$phim->Hinh}}" width="230" height="310" alt="">
      </div>
      <div class="col-md-3 col-xs-12 text-left" style="color:#2d2d30;">
         <input id="idphim" type="hidden" value="{{$phim->id}}">
         <h3><b>{{$phim->TenPhim}}</b></h3>
         <p><b>Đạo diễn:</b>&nbsp;{{$phim->DaoDien}}</p>
         <p><b>Diễn viên:</b>&nbsp;</p>
         @foreach($theloai as $tl)
            @if($tl->id == $phim->idTheLoai)
            <p><b>Thể loại:</b>&nbsp;{{$tl->TenTheLoai}}</p>
            @endif
         @endforeach
         <p><b>Quốc gia:</b>&nbsp;{{$phim->QuocGiaSanXuat}}</p>
         <p><b>Ngôn ngữ:</b>&nbsp;{{$phim->NgonNgu}}</p>
         <p><b>Thời lượng:</b>&nbsp;{{$phim->ThoiGian}}</p>
         <p><b>Ngày khởi chiếu:</b>&nbsp;{{$phim->NgayKhoiChieu}}</p>
         <p><b>Rated:</b>&nbsp;{{$phim->DoTuoiPhuHop}}</p>
      </div>
      <div class="col-md-4 col-xs-12">
         <h3 class="text-uppercase" style="padding-bottom:15px;">Lịch chiếu</h3>
         <div class="form-group" style="padding-left:0;">
            <input class="form-control ngaychieu" type="text" autocomplete="off" id="ngaychieu" 
                  placeholder="Chọn ngày">
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">Suất chiếu</div>
            <div class="panel-body" id="suat_chieu">
               <p>Vui lòng chọn suất</p>
            </div>
         </div>
      </div>
      <div class="col-xs-12">
         <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#noidung">Nội dung</a></li>
            <li><a data-toggle="tab" href="#trailer">Trailer</a></li>
            <li><a data-toggle="tab" href="#danhgia">Đánh giá</a></li>
         </ul>
         
         <div class="tab-content">
            <div id="noidung" class="tab-pane fade in active padding">
               <p>{{$phim->NoiDung}}</p>
            </div>
            <div id="trailer" class="tab-pane fade text-center padding">
               <iframe width="600" height="345" src="{{$phim->Trailer}}" frameborder="0" allowfullscreen>
               </iframe>
            </div>
            <div id="danhgia" class="tab-pane fade">
               <h3>Đánh giá</h3>
               <div class="fb-comments" data-href="http://localhost/CDIO3/public/trangchu" data-width="" data-numposts="5"></div>
               <p>Đánh giá ở đây!</p>
            </div>
         </div>
      </div>
   </div>   
</div>

@endsection

@section('script')
<script>
   $(document).ready(function() {
      function loadSuat()
      {
         var ngaychieu = $('#ngaychieu').val();
         var phim = $('#idphim').val();
         if(ngaychieu != '')
         {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({
               url : 'ajax/loadsuatchieu',
               type: 'POST',
               data: {ngaychieu:ngaychieu,idphim:phim},
               success:function(data)
               {
                  $('#suat_chieu').html(data);
               }
            });
         }

      }
      $('#ngaychieu').datepicker({
         format : 'yyyy/mm/dd',
         autoclose : true,
      }).datepicker('setDate', new Date());
      loadSuat();
      $('.ngaychieu').change(function(event) {
         /* Act on the event */
         var ngaychieu = $('#ngaychieu').val();
         var phim = $('#idphim').val();
         if(ngaychieu != '')
         {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({
               url : 'ajax/loadsuatchieu',
               type: 'POST',
               data: {ngaychieu:ngaychieu,idphim:phim},
               success:function(data)
               {
                  $('#suat_chieu').html(data);
               }
            });
         }
      });
   });
</script>
<script>
   
</script>
@endsection
