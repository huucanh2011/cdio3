@extends('layouts.index')
@section('content')
{{-- content --}}
{{-- slide --}}
@include('layouts.slide')
{{-- end_slide --}}

<div class="container-fulid" style="background-image: linear-gradient(45deg, #8baaaa 0%, #ae8b9c 100%);">
        <div class="padding">
            <ul class="nav nav-pills nav-pills-custom">
                <li class="active"><a data-toggle="tab" href="#phimDangChieu">Phim đang chiếu</a></li>
                <li><a data-toggle="tab" href="#phimSapChieu">Phim sắp chiếu</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="phimDangChieu">
                <div class="row text-center">
                    @foreach($phimdangchieu as $pdc)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="thumbnail thumbnail-ct">
                            <img class="img-responsive" src="upload/phim/{{ $pdc->Hinh }}" alt="Hinh"
                                style="width:100%; height:390px;">
                            <div class="box-img">
                                <div class="btns">
                                    <a class="trailer" href="#modalTrailer" data-toggle="modal">Trailer</a>
                                    <a class="datve" href="{{ route('chitietphim',$pdc->id) }}">Đặt vé</a>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p><strong>{{ $pdc->TenPhim }}</strong></p>
                            <p>Thời gian: {{ $pdc->ThoiGian }} | Tuổi {{ $pdc->DoTuoiPhuHop }}</p>
                            <p>Khởi chiếu: {{ $pdc->NgayKhoiChieu }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12 form-group">
                        <a href="phimdangchieu" class="btn btn-1 pull-right">Xem thêm
                            &nbsp;<span class="glyphicon glyphicon-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="phimSapChieu">
                <div class="row text-center">
                @foreach($phimsapchieu as $psc)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="thumbnail thumbnail-ct">
                            <img class="img-responsive" src="upload/phim/{{ $psc->Hinh }}" alt="Hinh"
                                style="width:100%; height:370px;">
                            <div class="box-img">
                                <div class="btns">
                                    <a class="trailer" class="js-modal-btn" data-video-id="7TUOI23spt0">Trailer</a>
                                    <a class="datve" href="{{ route('chitietphim',$psc->id) }}">Đặt vé</a>
                                </div>
                            </div>
                        </div>
                        <div class="caption">
                            <p><strong>{{ $psc->TenPhim }}</strong></p>
                            <p>Thời gian: {{ $psc->ThoiGian }} | Tuổi {{ $psc->DoTuoiPhuHop }}</p>
                            <p>Khởi chiếu: {{ $psc->NgayKhoiChieu }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12 form-group">
                        <a href="phimsapchieu" class="btn btn-1 pull-right">Xem thêm
                            &nbsp;<span class="glyphicon glyphicon-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>

<div id="news">
    <div class="container-fulid bg2" style="padding:45px 0px;">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3 class="text-uppercase margin">Blog phim</h3>
            </div>
            @foreach($tintuc as $tin)
            <div class="col-md-6 col-xs-12">
                <div class="thumbnail thumbnail-tintuc" style="border:none; padding:0;">
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="{{ route('chitiettintuc',$tin->id) }}">
                                <img class="img-responsive" src="upload/tintuc/{{$tin->Hinh}}"
                                alt="">
                            </a>
                        </div>
                        <div class="col-xs-8">
                            <div class="caption">
                                <p><strong>{{$tin->TieuDe}}</strong></p>
                                <p>{{$tin->TomTat}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="container">
                <a class="btn btn-1 pull-right" href="blogphim">Xem thêm
                    &nbsp;<span class="glyphicon glyphicon-arrow-right"></span>
                </a>
            </div>
            
        </div>
    </div>
</div>


{{-- end-content --}}

@endsection
<div class="modal fade" id="modalTrailer" role="dialog" style="z-index:999999">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <iframe height="100%" width="100%" src="" frameborder="0" alowfullscren>
            </iframe>
        </div>
      </div>
    </div>
</div>
