<div class="container-fulid" style="background:#101010;">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php $i=0 ; ?>
                    @foreach($slide as $sl)
                        <li data-target="#myCarousel" data-slide-to="{{$i}}"
                            @if($i==0) class="active"
                            @endif <?php $i++; ?>
                        ></li>
                    @endforeach
                </ol>
                <!-- Wrapper for slides -->
                <div  class="carousel-inner" role="listbox">
                    <?php $i=0; ?>
                    @foreach($slide as $sl)
                        <a href="https://facebook.com/huucanh2011{{ $sl->id }}" @if($i==0) class="item active" @else class="item" @endif >
                            <?php $i++; ?>
                            <img class="slide-image" width="100%" height="700" src="upload/slide/{{$sl->Hinh}}" alt="{{$sl->NoiDung}}">
                        </a>
                    @endforeach
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>  
                </div>
            </div>

</div>