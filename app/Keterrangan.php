<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterrangan extends Model
{
    //
	protected $fillable = [
        'keadaan','transmisi','bahanbkr','thnklr','harga','desk','motorrrs_id'];

        public function motorrrs(){

	return $this->belongsTo('App\Motorrr');
}
}
