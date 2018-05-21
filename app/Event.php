<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $dates =[
			'fecha',
	];

	public function coolaborator()
	{
    	return $this->hasOne(Coolaborator::class);
	}

	public function location()
	{
		return $this->hasOne(Location::class);
	}

	
	public function inforesource()
	{
		return $this->hasOne(InfoResource::class);
	}
}
