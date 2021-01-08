<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImmigrationCountry extends Model
{
    public function total_job()
	{
	   return $this->hasMany('App\ImmigrationOffers', 'country_id','id');
	}
}
