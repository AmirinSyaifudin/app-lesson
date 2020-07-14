<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuda extends Model
{
    //
    public $guarded = [];

    public $table = 'kuda';

    // public $timestamps = false;

    // relasi one to many banyak kuda di miliki perserta perdatang
    public function pesertaperdatang()
    {
        return $this->belongsTo(Pesertaperdatang::class);
    }
}