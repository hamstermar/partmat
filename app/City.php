<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
	public function partma(){
	 return  $this->belongsToMany("App\partam");
	}
}
