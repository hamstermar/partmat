@extends("layouts.master")
@section("title", "dispose")
@section("content")
	<div class="container" style="margin-top:10px;">
	<form method="POST" action="/addPartma">
	<select name="citySel" class="form-control">
		<option value="none" >ختار المدينة</option>
		@foreach($cities as $city)
		<option value="{{$city->id}}" >{{$city->name}}</option>
		@endforeach	
		</select><br>
      <input type="text" name="address" id="address" placeholder="address" class="form-control"/><br>
      <input type="text"  placeholder="Price" name="price" id="price" class="form-control"><br>
    	<select name="type" class="form-control">
		<option value="1">بارطما</option>
		<option value="2">فيلا</option>
		<option value="3">مكازا</option>
	</select><br>
      <input type="text"  placeholder="tel" id="" class="form-control" name="tel"><br>
      <input type="text"  placeholder="surface" name="surface" id="" class="form-control"><br>
      <select name="typeP" class="form-control">
		<option value="1">مفرشة</option>
		<option value="2">مامفرشاش</option>
	</select><br>
<label class="custom-file">
  <input type="file" id="file" class="custom-file-input">
  <span class="custom-file-control"></span>
</label>
	<textarea name="addInfo" class="form-control" rows="5" id="addInfo"></textarea>
	<button type="submit" class="btn btn-success btn-lg" style="margin-top:5px;">حط دارك</button>
	<input type="hidden" value="{{ csrf_token()}}" name="_token">
	</form>
	</div>
@endsection

