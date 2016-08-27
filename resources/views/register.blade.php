@extends("layouts.master")
@section("title", "register")
@section("content")
	<div class="container col-md-12" id="regisBox">
		@if(count($errors) > 0)
			<div>
				<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>


		@endif
		<form action="/addUser" method="POST">
			<input type="text" name="first_name"  placeholder="first name" value="{{ Request::old('first_name') }}"/><br>
			<input type="text" name="last_name" placeholder="last name" value="{{ Request::old('last_name') }}"/><br>
			<input type="text" name="email" placeholder="email" value="{{ Request::old('email') }}"/><br>
			<input type="password" name="password" placeholder="password" /><br>
			<input type="password" name="password_comf" placeholder="comfirm password" /><br>
			<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
			<button>Register</button>
		</form>
	</div>
@endsection
