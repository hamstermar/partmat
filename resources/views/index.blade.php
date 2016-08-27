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
			<table border="0" >
			<tr>
			<td colspan="2" style="padding-bottom:3px;">
			<label for="selPrice">
				الثمن لما تقدرش تفوتو
			</label>
			<input type="range" value="0"  min="0" max="100">
			<!--select name="priceRang" class="form-control" >
				<option value="none">الثمن</option>
			</select -->
			</td>
			</tr>
			<tr>
			<td>
			<select name="priceRang" class="form-control" >
				<option value="none">المساحة</option>
			</select>
			</td>
			<td>
			<select name="typeImm" class="form-control" >
				<option value="1">بغيت بارطما</option>
				<option value="2">بغيت فيلا</option>
				<option value="3">بغيت ماكازا</option>
			</select>
			</td>
			</tr>
			</table>	

				
			<table class="table table-bordered" style="font-size:16px;background-color:white;">
				<tr>
					<td><input  type="radio" name="reqType" value="1"  /> باغي نكري</td>
					<td><input  type="radio" name="reqType" value="2"/> باغي نشري</td>
				</tr>
			</table>
			<button class="btn btn-primary btn-lg" >بحت</button>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
	</div>
@endsection
