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
        factory(Category::class, 5)->create();
        factory(Product::class, 100)->create();
        factory(ProductImage::class, 200)->create();
    }
}
