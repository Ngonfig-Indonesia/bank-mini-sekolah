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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengirim');
            $table->unsignedBigInteger('id_penerima');
            $table->string('transaksi');
            $table->string('jumlah_pengirim');
            $table->string('jumlah_penerima');
            $table->timestamps();

            $table->foreign('id_pengirim')->references('id')->on('nasabahs')->onUpdate('CASCADE')->onDelete('CASCADE');  
            $table->foreign('id_penerima')->references('id')->on('nasabahs')->onUpdate('CASCADE')->onDelete('CASCADE');                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
};
