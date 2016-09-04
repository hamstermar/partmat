<?php

namespace App;

/*use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
class User extends Model implements Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //use \Illuminate\Auth\Authenticatable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//}
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable; 
class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $fillable = [
        'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
	public function partma(){
		return $this->hasMany('App\partma');
	}	
}

