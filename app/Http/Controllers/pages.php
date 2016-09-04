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
		$id = Auth::user()->id;
		$partmas = partma::where("user_id", $id)->get();
		return view("/dashboard", ['partmas' => $partmas]);
	}
	public function getDispose(){
		$cities = City::all();
		return view("/dispose",["cities" => $cities]);
	}
	public function getUpdate($id){
		//echo $id;
		$cities = City::all();
		return view("/update", ["id" => $id, "cities"=>$cities]);
	}
	public function getSearch(Request $req){
		$city = $req['citySel'];
		//$price = $req['price'];
		$type = $req['type'];
		//$surface = $req['surface'];
		$rent = $req['rent'];
		//$typeP  = $req['typeP'];
		//$partmas = partma::where("city_id", $city)->where("price","<=", $price)->where("type", $type)->where("rent", $rent)->where("typeP", $typeP)->get();
		
		$partmas = partma::where("city_id", $city)->where("rent", $rent)->where("type", $type)->get();
		return view("/list", ["partmas"=>$partmas]);
	}
	public function getProf(){
		return view("/editProf");
	}
	
}
