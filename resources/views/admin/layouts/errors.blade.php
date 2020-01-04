@if(count($errors) > 0)
<div class="alert alert-danger alert-dismissible" style="font-size: 1rem">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-ban"> Opps...</i></h4>
    <h5>
    @foreach($errors->all() as $err)
    {{$err}}<br>
    @endforeach
    </h5>
</div>
@endif
@if(session('thongbao'))
<div class="alert alert-{{session('type')}} alert-dismissible" style="font-size: 1rem">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"> Success!</i></h4>
	<h5>{{session('thongbao')}}</h5>
</div>
@endif
@if(session('thongbao1'))
<div class="alert alert-{{session('type')}} alert-dismissible" style="font-size: 1rem">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<h4><i class="icon fa fa-check"> Success!</i></h4>
	<h5>{{session('thongbao1')}}</h5>
</div>
@endif
