<?php

namespace Pedidoslinea;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Aqui consultamos la categoria de una productos
    public function category()
    {
    	//Un producto pertenece a una categoria
    	return $this->belongsTo(Product::class);
    }

    //Un producto tiene imagenes
    public function images()
    {
    	return $this->hasMany(ProductImage::class);
    }

}
