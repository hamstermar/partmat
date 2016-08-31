<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\partma as partma;
use App\Http\Requests;
use Validator;

class PartCont extends Controller
{
    //
   public function addParmat(Request $req){
	$validate = Validator::make($req->all(), [
	 "address" => "required|max:250",
	 "price" => "numeric",
	 "tel" => "numeric",
	 "surface"=> "numeric"
	]);
	if($validate->fails() == false){
		$partma = new partma();
		$partma->address = $req['address'];
		$partma->type = $req['type'];
		$partma->price = $req['price'];
		$partma->city = $req['citySel'];
		$partma->telN = $req['telN'];
		$partma->typeP = $req['typeP'];
		$partma->addInfo = $req['addInfo'];
		$partma->save();
		return redirect("/dashbaord");
	}
	else {
		return redirect("/")->back()->withErrors($validate);
	}
   }
}
