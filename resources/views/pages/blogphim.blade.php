@extends('layouts.index')
@section('content')
<div class="container-fulid bg2" style="padding:1rem 2.5rem">
   <div class="row">
        <h3 class="text-uppercase margin text-center">Blog phim</h3>
        @foreach($tintucs=App\TinTucPhim::paginate(6) as $tin)
            <div class="col-md-4 col-xs-12 margin">
                <div class="thumbnail thumbnail-ct" style="border:none; padding:0;">
                        <img class="img-responsive" src="upload/tintuc/{{$tin->Hinh}}" 
                            style="width:100%;" alt="">
                        <div class="box-img">
                            <div class="btns">
                                <a class="chitiet" href="{{ route('chitiettintuc',$tin->id) }}">Xem chi tiết</a>
                            </div>
                        </div>
                </div>
                <div class="caption">
                    <p><strong>{{$tin->TieuDe}}</strong></p>
                    <p>{{$tin->TomTat}}</p>
                </div>
            </div>
        @endforeach
        <div style="text-align: center;">{!! $tintucs->links() !!}</div>
   </div>
</div>
@endsection