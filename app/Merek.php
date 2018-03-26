<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
   protected $fillable = [
      'namamerek','mereks_id'];

	public function motor()
    {
	return $this->hasMany('App\Motorrr');
	}


}
