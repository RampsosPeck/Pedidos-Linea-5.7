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

}
