@extends("layouts.master")
@section("title", "Partmat.ma - login")
@section("content")
	<div class="col-sm-12 container" id="loginBox">
		@if(count($errors) > 0)
			<div>
				<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>


		@endif
		<form action="/logUser" method="POST">
			<input type="email" name="email" placeholder="email"/><br>
			<input type="password" name="password" placeholder="password"/><br>
			<input type="submit" value="login" name="login" />
			<input type="hidden" value="{{ csrf_token()}}" name="_token">
		</form>
	</div>
@endsection
