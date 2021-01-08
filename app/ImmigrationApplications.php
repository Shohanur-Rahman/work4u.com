<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImmigrationApplications extends Model
{
    public function job_name()
	{
	    return $this->belongsTo('App\ImmigrationOffers', 'post_id','id');
	}
}
