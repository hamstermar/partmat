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
      <input type="text"  placeholder="Price" id="price" class="form-control"><br>
    	<select name="typeIm" class="form-control">
		<option value="1">بارطما</option>
		<option value="2">فيلا</option>
		<option value="3">مكازا</option>
	</select><br>
      <input type="text"  placeholder="tel" id="" class="form-control"><br>
      <input type="text"  placeholder="tel2" id="" class="form-control"><br>
      <input type="text"  placeholder="surface" id="" class="form-control"><br>
      <select value="typeP" class="form-control">
		<option>مفرشة</option>
		<option>مامفرشاش</option>
	</select><br>
<label class="custom-file">
  <input type="file" id="file" class="custom-file-input">
  <span class="custom-file-control"></span>
</label>
	<textarea name="addInfo" class="form-control" rows="5" id="addInfo"></textarea>
	</form>
	</div>
@endsection

