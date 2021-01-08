<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyCountry extends Model
{
    //
    public function total_job()
	{
	   return $this->hasMany('App\StudyOffer', 'country_id','id');
	}
}
