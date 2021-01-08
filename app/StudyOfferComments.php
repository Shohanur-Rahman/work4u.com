<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyOfferComments extends Model
{
   public function reply_comments()
	{
		return $this->hasMany('App\StudyOfferComments', 'comment_id','id');
	}

	public function offer()
	{
	    return $this->hasOne('App\StudyOffer', 'id','post_id');
	}
    
}
