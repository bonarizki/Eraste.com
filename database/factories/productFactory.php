<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        "kode_product"=>"L".rand(),
        "nama_product"=>"sepatu test-".rand(1,1000),
        "harga_product"=>rand(1000,1000000)
    ];
});
