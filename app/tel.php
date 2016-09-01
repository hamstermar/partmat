<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tel extends Model
{
    //
	public function partma(){
		return $this->belongsTo('App\partma');
	}
}
