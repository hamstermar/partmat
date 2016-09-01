<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class picture extends Model
{
    //
	public function partma(){
		return $this->belongsTo('App\partma');
	}
}
