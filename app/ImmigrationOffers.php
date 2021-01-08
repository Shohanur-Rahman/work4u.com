<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImmigrationOffers extends Model
{
    public function country()
	{
	    return $this->belongsTo('App\ImmigrationCountry', 'country_id');
	}
	public function category()
	{
	    return $this->belongsTo('App\ImmigrationCategories', 'category_id');
	}
}
