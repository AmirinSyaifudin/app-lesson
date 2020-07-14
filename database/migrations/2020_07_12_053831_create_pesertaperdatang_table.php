<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaperdatangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertaperdatang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_peserta');
            $table->string('jenis_kelamin');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('no_telpon');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertaperdatang');
    }
}