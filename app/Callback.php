<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
    //

    public function category(){
    	return $this->hasone('App\Category','id','category_id');
    }
}
