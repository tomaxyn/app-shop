<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // $category->products
   
    public function producttype()
    {
    	return $this->hasMany(ProductType::class);
    }

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }

}
