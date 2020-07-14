<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Peserta;
use Faker\Generator as Faker;

$factory->define(Peserta::class, function (Faker $faker) {
    return [
        //
        'nama_peserta'  => $faker->name,
        'jenis_kelamin' => $faker->randomElement(['L', 'P']),
        'tinggi_badan'  => $faker->randomDigit,
        'berat_badan'   => $faker->randomDigit,
        'no_telpon'     => $faker->e164PhoneNumber,
        'alamat'        => $faker->address,

    ];
});