<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariksaldos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_nasabah');
            $table->string('transaksi');
            $table->string('jumlah');
            $table->timestamps();

            $table->foreign('id_nasabah')->references('id')->on('nasabahs')->onUpdate('CASCADE')->onDelete('CASCADE');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariksaldos');
    }
};
