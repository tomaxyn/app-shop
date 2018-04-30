<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rolluser extends Model
{
     public function useras()
    {
    	return $this->hasMany(User::class);
    }
}
