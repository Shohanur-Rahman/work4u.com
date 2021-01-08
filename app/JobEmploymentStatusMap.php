<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobEmploymentStatusMap extends Model
{
    public function status_table()
	{
	    return $this->belongsTo('App\EmploymentStatus', 'status_id');
	}
}
