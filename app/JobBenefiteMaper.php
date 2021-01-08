<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobBenefiteMaper extends Model
{
    public function benefit_table()
	{
	    return $this->belongsTo('App\JobBenefites', 'benefite_id');
	}
}
