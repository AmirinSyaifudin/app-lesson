<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKudaPesertaperdatangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuda_pesertaperdatang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kuda_id');
            $table->unsignedBigInteger('pelatih_id');
            $table->unsignedBigInteger('pesertaperdatang_id');
            $table->string('tanggal');
            $table->string('biaya');
            $table->timestamps();

            $table->foreign('kuda_id')->references('id')->on('kuda')
                ->onUpdate('CASCADE')
                ->unDelete('CASCADE');

            $table->foreign('pelatih_id')->references('id')->on('pelatih')
                ->onUpdate('CASCADE')
                ->unDelete('CASCADE');

            $table->foreign('pesertaperdatang_id')->references('id')->on('pesertaperdatang')
                ->onUpdate('CASCADE')
                ->unDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuda_pesertaperdatang');
    }
}