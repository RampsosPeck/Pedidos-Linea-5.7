<?php

namespace Pedidoslinea;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Al acceder a una categoria quisieramos acceder a los productos que estan dentro de una CATEGORIA
	public function products()
	{
		//Una categoria tiene muchos productos
		return $this->hasMany(Product::class);
	}

	public function getUrlcateAttribute()
    {
    	if(substr($this->image, 0, 4) === "http"){
    		return $this->image;
    	}
    	return '/images/categories/'.$this->image;
    }

}
