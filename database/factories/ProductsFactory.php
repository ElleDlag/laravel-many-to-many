<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker -> word,
        'category'=> $faker -> text($maxNbChars = 50),
        'quantity'=> $faker -> numberBetween($min = 0, $max = 10000),
        'price'=> $faker -> numberBetween($min = 0, $max = 20000),
        'inStock'=> $faker -> numberBetween($min = 0, $max = 1000),
        'inOrder'=> $faker -> numberBetween($min = 0, $max = 5000),
    ];
});
