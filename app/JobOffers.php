<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOffers extends Model
{
    public function benefit_maper()
	{
		return $this->hasMany('App\JobBenefiteMaper', 'job_id','id');
	}

	public function emplyment_status_maper()
	{
		return $this->hasMany('App\JobEmploymentStatusMap', 'job_id','id');
	}
	public function country()
	{
	    return $this->belongsTo('App\JobCountries', 'country_id');
	}
	public function category()
	{
	    return $this->belongsTo('App\JobCategories', 'category_id');
	}

	

}
