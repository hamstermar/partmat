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
}
