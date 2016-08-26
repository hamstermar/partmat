<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City as City;
class pages extends Controller
{
    //
	public function getIndex(){
		$cities = City::all(); 
		return view("index",["cities" => $cities]);
	}
	public function getSearch(Request $req){
		$cityId = $req['citySel'];
		$search = ;
		return view("list", ["search" => $search]);
	}
	
}
