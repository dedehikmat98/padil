<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
   protected $fillable = [
      'namatipe','tipes_id'];

	public function motor()
    {
	return $this->hasMany('App\Motorrr');
	}
}
