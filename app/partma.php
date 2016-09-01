<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partma extends Model
{
    //
	public function tel(){
		return $this->hasMany('App\tel');
	}
	public function user(){
		return $this->belongsTo('App\User');
	}
	public function city(){
		return $this->belongsTo('App\City');
	}
}
