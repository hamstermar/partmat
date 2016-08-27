<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// the Pages that gonna be displayer
Route::get('/', "pages@getIndex");
Route::post("/search", "pages@getSearch");
Route::get("/dispose", "pages@getDispose");
Route::get("/register", "pages@getRegister");
Route::get("/login", "pages@getLogin");
Route::get("/dashboard", ["uses" => "pages@getDash", "as"=>"dashboard", "middleware"=>"auth"]);
// the Execution of data
//------------------------------- User Controller
Route::post("/addUser", "UserCont@addUser");
Route::post("/logUser", "UserCont@loginUser");
Route::get("/logout", "UserCont@logout");
