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
	 "tel" => "numeric|min:10",
	 "surface"=> "numeric",
	 "tel_sec" => "numeric|min:10"
	]);
	if($validate->fails() == false){
		// in need to create an pictures object
		//$pictures = new Picture();
		// creating tel object
		$tel = new tel();
		$tel->tel_nb = $req['tel'];
		//$tel2 = $req['tel2'];
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
		$partma->rent = true;
		$partma->addInfo = $req['addInfo'];
		$partma->save();
		$partma->tel()->save($tel);
		if($req['tel_sec']){
		$tel2 = new tel();
		$tel->tel_nb = $req['tel_sec'];
		$partma->tel()->save($tel2);
		}
		return redirect("/dashboard");
	}
	else {
		return redirect("/")->back()->withErrors($validate);
	}
   }
   public function updPartma($id,Request $req){
		// update a partma
		$partma = partma::find($id);
		if($req->has('address')){
		$partma->address = $req['address'];
		}
		if($req->has('type')){
		$partma->type = $req['type'];
		}
		if($req->has('price')){
		$partma->price = $req['price'];
		}
		if($req->has('citySel')){
		$partma->city_id = $req['citySel'];
		}
		if($req->has('typeP')){
		$partma->typeP = $req['typeP'];
		}
		if($req->has('surface')){
		$partma->surface = $req['surface'];
		}
		if($req->has('addInfo')){
		$partma->addInfo = $req['addInfo'];
		}
		if($req->has('rent')){
		$partma->rent = $req['rent'];
		}
		if($req->has('tel')){
		$tel = tel::where("partma_id", $id)->first(); 
		$tel->tel_nb = $req['tel'];
		$tel->save();
		}
		if($req->has('tel_sec')){
		$tel2 = tel::where("partma_id", $id)->last();
		$tel2->tel_nb = $req['tel'];
		$tel->save();
		}
		/*
		if($req->has()){

		}
		*/
		$partma->save();
   } 
   public function delPartma($id){
		// delete a partma
		tel::where("partma_id", $id)->delete();
		partma::destroy($id);
  }
  
}
