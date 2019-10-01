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

    public function getFeaturedImageUrlAttribute(){
        $featured = $this->images()->where('featured',true)->first();
        if(!$featured){ //En caso que la imagen no sea destacada
            $featuredImage = $this->images()->first();
        }
        if($featuredImage){
            return $featuredImage->url;//del otro mutator que hicimos en el modelo ProductImage
        }
        return '/images/products/default.png';
    }

}
