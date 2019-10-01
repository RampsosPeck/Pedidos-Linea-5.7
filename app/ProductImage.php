<?php

namespace Pedidoslinea;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //Aque producto le pertenece esta imagen
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function getUrlAttribute()
    {
    	if(substr($this->image, 0, 4) === "http"){
    		return $this->image;
    	}
    	return '/images/products/'.$this->image;
    }

}
