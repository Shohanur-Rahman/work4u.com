<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOfferComments extends Model
{
    public function reply_comments()
	{
		return $this->hasMany('App\JobOfferComments', 'comment_id','id');
	}

	public function offer()
	{
	    return $this->hasOne('App\JobOffers', 'id','post_id');
	}
}
