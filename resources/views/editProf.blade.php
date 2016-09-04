@extends('layouts.master')
@section("title", "Edit Profile")
@section("content")
	<div class="container" style="margin-top:5px;">
		<form action="/updProf" method="POST">
			<input type="text" placeholder="first name" name="first" class="form-control"/><br>
			<input type="text" placeholder="last name" name="last" class="form-control"/><br>
			<input type="email" placeholder="email" name="email" class="form-control"/><br>
			<input type="password" placeholder="password" name="password" class="form-control"/><br>
			<input type="password" placeholder="comfirm password" name="password_comf" class="form-control"/><br>
			<input type="submit" value="Save"  class="btn btn-success btn-lg"/>
		</form>
	</div>

@endsection
