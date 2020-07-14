<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kuda;
use Faker\Generator as Faker;

$factory->define(Kuda::class, function (Faker $faker) {
    return [
        //
        'nama_kuda' => $faker->name,
        'jenis_kuda' => $faker->name,
    ];
});