<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImmigrationComments extends Model
{
    public function reply_comments()
	{
		return $this->hasMany('App\ImmigrationComments', 'comment_id','id');
	}

	public function offer()
	{
	    return $this->hasOne('App\ImmigrationOffers', 'id','post_id');
	}
}
