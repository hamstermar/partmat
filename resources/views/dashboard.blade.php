@extends("layouts.master")
@section("title", "dashboard")
@section("content")
	<?php $user = Auth::user(); ?>
	<div class="container col-sm-12" id="dashBox">
		<span>السلام و عليكم {{ $user->first }} {{ $user->last }}</span>
		<img src="{{ URL::to('/icons/user_upd.png')}}" onclick="window.location='/editProf'"><br>
	<button class="btn btn-success" onclick="window.location='/dispose'">حط دارك هنا</button><br>
	<div>
		@if(count($partmas) > 0)
			<?php echo count($partmas);?>
			@foreach($partmas as $partma)
			<div class="panel panel-default">
				<div class="panel-heading">
					{{ $partma->address }}
					<button class="btn btn-link" part-id="{{ $partma->id }}" >Update</button>
					<button class="btn btn-link" part-id="{{ $partma->id }}">Delete</button>
				</div>
				<div class="panel-body">
					<table border="0">
						<tr><td>{{ $partma->type }}</td></tr>
						<tr><td>{{ $partma->price }}</td></tr>
						<tr><td>{{ $partma->suface}}</td></tr>
					</table>
				</div>
			</div>				
			@endforeach	
		@endif
		@if(count($partmas) == 0)
			<span>مازال ماحطيتي حتى شي دار لكرا ولا لبيع</span>
		@endif
	</div>
	</div>
	</div>
@endsection
