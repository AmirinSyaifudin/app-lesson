<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pelatih;
use Faker\Generator as Faker;

$factory->define(Pelatih::class, function (Faker $faker) {
    return [
        //
        'nama_pelatih'  => $faker->name,
        'jenis_kelamin' => $faker->randomElement(['L', 'P']),
        'no_telpon'     => $faker->e164PhoneNumber,
        'alamat'        => $faker->address,
    ];
});