@extends("layouts.master")

@section("title", "Partmat.ma - سمسار بلا فلوس")
@section('content')
	<div class="col-sm-12" style="background-color:#ffca56;padding:5px;">
	<h4 lang="ar" dir="rtl" class="text-primary">قلب على دار الكرا ولا الشرا</h4>
	<span lang="ar" dir="rtl" >پارطمات،مكازات،فيلات</span>
		<form style="margin-top:25px;" action="/search" method="post" class="form-group" >
			<select name="citySel" style="width:100%;" class="form-control">
				<option value="none" >ختار المدينة</option>
				@foreach($cities as $city)
					<option value="{{$city->id}}" >{{$city->name}}</option>
				@endforeach	
			</select>

			<table border="0" style="width:100%;">
			<tr>
			<td>
			<select name="priceRang" class="form-control" style="margin-top:3px;">
				<option value="none">الثمن</option>
			</select>
			</td>
			<td>
			<select name="priceRang" class="form-control" style="margin-top:3px;">
				<option value="none">المساحة</option>
			</select>
			</td>
			</tr>
			</table>	

			<select name="typeImm" class="form-control" style="margin-top:3px;">
				<option value="1">بغيت بارطما</option>
				<option value="2">بغيت فيلا</option>
				<option value="3">بغيت ماكازا</option>
			</select>
				
			<table class="table table-bordered" style="margin-top:3px;background-color:white;color:#555;font-size:14px;">
				<tr>
					<td><input  type="radio" name="reqType" value="1"  /> باغي نكري</td>
					<td><input  type="radio" name="reqType" value="2"/> باغي نشري</td>
				</tr>
			</table>
			<button class="btn btn-primary btn-lg" style="width:100%;">بحت</button>
		</form>
	</div>
@endsection
