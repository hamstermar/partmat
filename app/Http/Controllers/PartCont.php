<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\partma as partma;
use App\City as City;
use App\tel as tel;
use App\Http\Requests;
use Validator;
use Auth;
class PartCont extends Controller
{
    //
   public function addPartma(Request $req){
	$validate = Validator::make($req->all(), [
	 "address" => "required|max:250",
	 "price" => "numeric",
	 "tel" => "numeric",
	 "surface"=> "numeric"
	]);
	if($validate->fails() == false){
		// in need to create an pictures object
		//$pictures = new Picture();
		// creating tel object
		$tel = new tel();
		$tel->tel_nb = $req['tel'];
		$user = Auth::user()->id;
		// if the tel 2 is Inserted 
		$partma = new partma();
		$partma->address = $req['address'];
		$partma->type = $req['type'];
		$partma->price = $req['price'];
		$partma->city_id = $req['citySel'];
		$partma->typeP = $req['typeP'];
		$partma->surface = $req['surface'];
		$partma->user_id = $user;
		$partma->addInfo = $req['addInfo'];
		$partma->save();
		$partma->tel()->save($tel);
		return redirect("/dashboard");
	}
	else {
		return redirect("/")->back()->withErrors($validate);
	}
   }
   public function updPartma(){
		// update a partma
   } 
   public function delPartma(){
		// delete a partma
   }
  
}
