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
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekening')->unique();
            $table->string('nama');
            $table->string('nis')->unique();
            $table->unsignedBigInteger('id_kelas')->nullable();
            $table->unsignedBigInteger('id_jurusan')->nullable();
            $table->string('alamat');
            $table->string('status')->default('Umum');
            $table->timestamps();

            $table->foreign('id_kelas')->references('id')->on('kelas');
            $table->foreign('id_jurusan')->references('id')->on('jurusans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nasabahs');
    }
};
