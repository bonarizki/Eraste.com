<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\order;
use Faker\Generator as Faker;

$factory->define(order::class, function (Faker $faker) {
    return [
        "kode_order"=>rand(),
        "kode_product"=>factory('App\product')->create()->kode_product,
        "nama_customer"=>$faker->name,
        "alamat_customer"=>$faker->address,
        "phone_number"=>rand()
    ];
});
