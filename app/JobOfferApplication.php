<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOfferApplication extends Model
{
   public function job_name()
	{
	    return $this->belongsTo('App\JobOffers', 'post_id','id');
	}
}
