<?php

namespace App\Http\Controllers;
use App\User as User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Validator;
class UserCont extends Controller
{
    //
	public function addUser(Request $req){
		$validate = Validator::make($req->all(), [
		"email" => "email|required|max:120|unique:users",
		"password" => "required|max:120|min:6",
		"first_name" => "required|max:120",
		"last_name" => "required|max:120",
		], [	
		"password.required" => "مودباس ضروري",
		"password.min" => "المودباس صغير ! خاص على الاقل إكون فيه 6 الحروف",
		"email.required" => "الإمايل ضروري",
		"password.max" => "مودباس طويل بزاف",
		"email.max" => "إميل طويل بزاف",
		"email.email" => "الإمايل ما ما مكتوبش مزيان",
		"first_name.required" => "السمية ضرورية",
		"last_name.required" => "الكنية ضرورية",
		"first_name.max" => "السمية كبيرة بزاف",
		"last_name.required.max" => "الكنية كبيرة بزاف"
		]);
		$email = $req['email'];
		$password = $req['password'];
		$password_comfirm = $req['password_comf'];
		$first_name = $req['first_name'];
		$last_name = $req['last_name'];
		if($validate->fails()){
			return redirect()->back()->withErrors($validate);
		}else {
			if($password == $password_comfirm){
				// adding the user to the database
				$user = new User();
				$user->first = $first_name;
				$user->last = $last_name;
				$user->email = $email;
				$user-> password = bcrypt($password);
				$user->save();
				Auth::login($user);	
				//redirecting to dashboard
				return redirect("/dispose");
			}
			else {
				// adding error to validation errors
				$validate->errors()->add("nn", "مودباسات ماشي بحال بحال");
				return redirect()->back()->withErrors($validate);
			}
		}
	}
	public function loginUser(Request $req){
		$validate = Validator::make($req->all(), [
		"email" => "email|required|max:120",
		"password" => "required|max:120"
		],[
		"password.required" => "مودباس ضروري" , 
		"email.required" => "الإمايل ضروري",
		"password.max" => "مودباس طويل بزاف",
		"email.max" => "إميل طويل بزاف",
		"email.email" => "الإمايل ما ما مكتوبش مزيان"
		]);
		if($validate->fails() == false){
		$email = $req['email'];
		$password = $req['password'];
		if(Auth::attempt(["email"=>$email, "password"=>$password])){	
			return redirect("/dashboard");
		}
		else {
			
		//["errors" => "مودباس ولا الإمايل غالط"]);
			$validate->errors()->add("nn","مودباس ولا الإمايل غالط".$email.":".$password);
			return redirect()->back()->withErrors($validate);
		}
		}else {
			return redirect()->back()->withErrors($validate);
		}
	}
		public function logout(){
			Auth::logout();
			return redirect("/login");
		}
		public function updUser(Request $req){
		/*$validate = Validator::make($req->all(), [
		"email" => "email|required|max:120|unique:users",
		"password" => "required|max:120|min:6",
		"first_name" => "required|max:120",
		"last_name" => "required|max:120",
		], [	
		"password.required" => "مودباس ضروري",
		"password.min" => "المودباس صغير ! خاص على الاقل إكون فيه 6 الحروف",
		"email.required" => "الإمايل ضروري",
		"password.max" => "مودباس طويل بزاف",
		"email.max" => "إميل طويل بزاف",
		"email.email" => "الإمايل ما ما مكتوبش مزيان",
		"first_name.required" => "السمية ضرورية",
		"last_name.required" => "الكنية ضرورية",
		"first_name.max" => "السمية كبيرة بزاف",
		"last_name.required.max" => "الكنية كبيرة بزاف"
		]);
		*/
	
		if($validate->fails() == false){
			$user = Auth::user();
			if($req->has('first')){
			$first = $req['first'];
			}
			if($req->has('last')){
			$last = $req['last'];
			}
			if($req->has('email')){
			$email = $req['email'];
			}
			if($req->has('password_comf')){
			$password = $req['password'];
			$password_comf = $req['password_comf'];	
			$password_comf = $req['password_comf']	
			if($password == $password_comf){
				// Update the Current user
				$user = Auth::user();
				$user->password = $password;
				$user->save();
			}
			else {
				$validate->errors()->add("nn", "مودباسات ماشي بحال بحال");
			}
			}
			
		}
		}else {
			return redirect()->back()->withErrors($validate)
		}
}
