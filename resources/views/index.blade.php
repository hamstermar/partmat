@extends("layouts.master")
@section("title", "Partmat.ma - سمسار بلا فلوس")
@section('content')
	<div class="col-sm-12 container" id="srchBox" >
	<h4 lang="ar" dir="rtl" class="text-primary">قلب على دار الكرا ولا الشرا
	<small lang="ar" dir="rtl" > پارطمات،مكازات،فيلات...</small></h4>
		<form action="/search" method="post" class="form-group container" >
			<select name="citySel" class="form-control">
				<option value="none" >ختار المدينة</option>
				@foreach($cities as $city)
					<option value="{{$city->id}}" >{{$city->name}}</option>
				@endforeach	
			</select>
			<!--label for="price">
				الثمن لما تقدرش تفوتو
			</label>
			<input type="text" class="form-control" placeholder="price" name="price"/ -->
			<table border="0" >
			<!--select name="priceRang" class="form-control" >
				<option value="none">الثمن</option>
			</select -->
			<tr>
			<!--td>
			<select name="surface" class="form-control" >
				<option value="none">المساحة</option>
			</select>
			</td-->
			<td>
			<select name="type" class="form-control" >
				<option value="1">بارطما</option>
				<option value="2">فيلا</option>
				<option value="3">ماكازا</option>
			</select>	
			</td>
			<!--td>		
      <select name="typeP" class="form-control">
		<option value="1">مفرشة</option>
		<option value="2">مامفرشاش</option>
	</select>
			</td-->
			</tr>
			</table>	
			<table class="table table-bordered" style="font-size:16px;background-color:white;">
				<tr>
					<td><input  type="radio" name="rent" value="true"  /> باغي نكري</td>
					<td><input  type="radio" name="rent" value="false"/> باغي نشري</td>
				</tr>
			</table>
			<button class="btn btn-primary btn-lg" >بحت</button>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
	</div>
@endsection
