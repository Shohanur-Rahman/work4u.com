<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyOffer extends Model
{
    //


    public function country()
	{
	    return $this->belongsTo('App\StudyCountry', 'country_id');
	}
}
