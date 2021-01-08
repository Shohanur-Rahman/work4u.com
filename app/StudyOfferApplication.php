<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyOfferApplication extends Model
{
    //
     public function job_name()
	{
	    return $this->belongsTo('App\StudyOffer', 'post_id','id');
	}
}
