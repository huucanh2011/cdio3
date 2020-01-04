@extends('layouts.index')
@section('content')

<div class="container-fulid" style="margin-top:20px; padding:0px 70px;">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Chọn phim</div>
                @foreach($phim as $p)
                <ul class="chonphim">
                    <li class="items-chonphim">
                        <input type="hidden" id-phim="{{$p->id}}">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img class="img-responsive" width="70" height="150" id="phim" src="upload/phim/{{$p->Hinh}}" 
                                        alt="{{$p->TenPhim}}">
                                </div>
                                <div class="col-xs-9">
                                    <p style="color:#000">Phim: {{$p->TenPhim}}</p>
                                    <p style="color:#000">Tuổi: {{$p->DoTuoiPhuHop}}</p>
                                </div>
                            </div>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Chọn suất chiếu</div>
                <div class="panel-body">
                    <p style="color:#000;">Vui lòng chọn suất</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    // $(document).ready(function() {
    //    $('.items-chonphim').click(function(event){
    //     var id_phim = $('.items-chonphim input[type="hidden"]').attr('id-phim');
    //     alert(id_phim);
    //     // console.log(id_phim);
    //    }); 
    // });
</script>
@endsection