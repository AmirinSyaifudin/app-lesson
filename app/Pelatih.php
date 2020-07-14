<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    //
    public $guarded = [];

    public $table = 'pelatih';


    // relasi one to many banyak pelatih di miliki perserta perdatang
    public function pesertaperdatang()
    {
        return $this->belongsTo(Peserteperdatang::class);
    }
}