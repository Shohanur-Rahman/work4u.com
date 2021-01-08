<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCountries extends Model
{
    public function total_job()
	{
	   return $this->hasMany('App\JobOffers', 'country_id','id');
	}
}
