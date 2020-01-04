@extends('layouts.index')
@section('content')
<div class="container bg2" style="margin-top:60px;">
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center">{{$tintuc->TieuDe}}</h3>
            <img class="img-responsive" src="upload/tintuc/{{$tintuc->Hinh}}" style="align-items: center;">
            <p>{!!$tintuc->NoiDung!!}</p>
        </div>
        <div class="fb-comments" data-href="http://localhost/CDIO3/public/trangchu" data-width="" data-numposts="5"></div>
    </div>
</div>
@endsection