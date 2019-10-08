<?php

use Faker\Generator as Faker;
use Pedidoslinea\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
    	'name' => ucfirst($faker->word),
		'description' => $faker->sentence(10),
		'image' => $faker->imageUrl(250, 250)
    ];
});
