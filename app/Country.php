<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function geoarea()
    {
    	return $this->BelongsTo(Geoarea::class);
    }
    
}
