@extends("layouts.master")
@section("title", "List Partma")
@section('content')
	<div class="container" style="margin-top:5px;">
	@if(count($partmas) > 0)
		@foreach($partmas as $partma)
			<div class="panel panel-primary">
				<div class="panel-heading">{{ $partma->address }} {{ $partma->price }} {{ $partma->surface }}</div>
				<div class="panel-body">
				{{ $partma->city->name }}
				</div>
			</div>
		@endforeach
	@endif
	@if(count($partmas) == 0 )
		mazal makayn walo
	@endif
	</div>
@endsection
