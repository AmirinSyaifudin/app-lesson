<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesertaperdatang extends Model
{
    //
    public $guarded = [];

    public $table = 'pesertaperdatang';

    //relasi one to many pesertaperdatang ke banyak kuda
    public function kuda()
    {
        return $this->hasMany(Kuda::class);
    }

    public function pelatih()
    {
        return $this->hasMany(pelatih::class);
    }
}