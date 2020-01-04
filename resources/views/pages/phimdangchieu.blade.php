@extends('layouts.index')
@section('content')
<div class="container-fulid" style="padding: 0rem 2.5rem">
        <div class="padding">
            <ul class="nav nav-tabs text-uppercase">
                <li class="active"><a data-toggle="tab" href="#phimDangChieu">Phim đang chiếu</a></li>
                <li><a data-toggle="tab" href="#phimSapChieu">Phim sắp chiếu</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="phimDangChieu">
                <div class="row text-center">
                @foreach($phimdangchieu as $pdc)
                    <div class="col-md-3 col-sm-6 col-xs-12 margin">
                        <div class="thumbnail thumbnail-ct" style="margin-bottom:0">
                            <img class="img-responsive" src="upload/phim/{{ $pdc->Hinh }}" alt="Hinh"
                                style="width:100%; height:370px;">
                            <div class="box-img">
                                <div class="btns">
                                    <a class="trailer" href="#">Trailer</a>
                                    <a class="datve" href="{{ route('chitietphim',$pdc->id) }}">Đặt vé</a>
                                </div>
                            </div>
                        </div>
                        <div class="caption" style="color:#2d2d30;">
                            <p><strong>{{ $pdc->TenPhim }}</strong></p>
                            <p>Thời gian: {{ $pdc->ThoiGian }} | Tuổi {{ $pdc->DoTuoiPhuHop }}</p>
                            <p>Khởi chiếu: {{ $pdc->NgayKhoiChieu }}</p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="phimSapChieu">
                <div class="row text-center">
                    @foreach($phimsapchieu as $psc)
                    <div class="col-md-3 col-sm-6 col-xs-12 margin">
                        <div class="thumbnail thumbnail-ct" style="margin-bottom:0">
                            <img class="img-responsive" src="upload/phim/{{ $psc->Hinh }}" alt="Hinh"
                                style="width:100%; height:370px;">
                            <div class="box-img">
                                <div class="btns">
                                    <a class="trailer" href="#">Trailer</a>
                                    <a class="datve" href="{{ route('chitietphim',$psc->id) }}">Đặt vé</a>
                                </div>
                            </div>
                        </div>
                        <div class="caption" style="color:#2d2d30;">
                            <p><strong>{{ $psc->TenPhim }}</strong></p>
                            <p>Thời gian: {{ $psc->ThoiGian }} | Tuổi {{ $psc->DoTuoiPhuHop }}</p>
                            <p>Khởi chiếu: {{ $psc->NgayKhoiChieu }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</div>
@endsection