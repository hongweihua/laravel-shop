<?php
/**
 * Created by PhpStorm.
 * User: whhong
 * Date: 2019/1/18
 * Time: 17:02
 */

use Faker\Generator as Faker;

$factory->define(App\Models\ProductSku::class, function (Faker $faker) {
    return [
        'title'       => $faker->word,
        'description' => $faker->sentence,
        'price'       => $faker->randomNumber(4),
        'stock'       => $faker->randomNumber(5),
    ];
});