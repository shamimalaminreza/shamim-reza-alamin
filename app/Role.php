<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
         public function users(){
    	//1 ta roler multiple user ase 
        return $this->hasMany('App\User');

    }

}
