<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\City as City;
use App\partma as partma;
class pages extends Controller
{
    //
	public function getIndex(){
		$cities = City::all(); 
		return view("index",["cities" => $cities]);
	}
	public function getSearch(Request $req){

		//$cityId = $req['citySel'];	
		//return view("list", ["search" => $search]);
	}
	public function getLogin(){
		if(Auth::check()){
		return redirect("/dashboard");
		}
		else {
		return view("login");
		}
		
	}
	public function getRegister(){
		if(Auth::check()){
		return redirect("/dashboard");
		}
		else {
		return view("register");
		}
	}
	public function getDash(){
		$partmas = partma::where("id",Auth::user()->id);
		return view("/dashboard", ['partmas' => $partmas]);
	}
	public function getDispose(){
		$cities = City::all();
		return view("/dispose",["cities" => $cities]);
	}
	
}
