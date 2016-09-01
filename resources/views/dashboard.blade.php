@extends("layouts.master")
@section("title", "dashboard")
@section("content")
	<?php $user = Auth::user(); ?>
	<div class="container col-sm-12" id="dashBox">
		<span>السلام و عليكم {{ $user->first }} {{ $user->last }}</span>
	</div>
	<button class="btn btn-success" onclick="window.location='/dispose'">حط دارك هنا</button>
	<div>
		@if(count($partmas) > 0)
			<div class="panel panel-default">
				<div class="panel-heading">
					<table border="0">
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
					</table>
				</div>
				<div class="panel-body"></div>
			</div>				
		@endif
		@if(count($partmas) == 0)
			<span>مازال ماحطيتي حتى شي دار لكرا ولا لبيع</span>
		@endif
	</div>
	</div>
@endsection
