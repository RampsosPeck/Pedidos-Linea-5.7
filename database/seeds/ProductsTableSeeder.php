<?php

use Illuminate\Database\Seeder;
use Pedidoslinea\Category;
use Pedidoslinea\Product;
use Pedidoslinea\ProductImage;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(Category::class, 5)->create();
        factory(Product::class, 100)->create();
        factory(ProductImage::class, 200)->create();*/

        //Primero creamos 5 categorias
        $categories = factory(Category::class, 5)->create();
        $categories->each(function($category){
            $products = factory(Product::class, 20)->make();
            //El metodo saveMany guarda muchos productos
            $category->products()->saveMany($products);

            $products->each(function($pro){
                $images = factory(ProductImage::class, 5)->make();
                $pro->images()->saveMany($images);
            });
        });


    }
}
