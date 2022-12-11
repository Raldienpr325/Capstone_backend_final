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
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
            $table->string('Nama_materi');
            $table->string('deskripsi', 500);
            $table->string('paragraf_1', 500)->default('Null');
            $table->string('paragraf_2', 500)->default('Null');
            $table->string('paragraf_3', 500)->default('Null');
            $table->string('paragraf_4', 500)->default('Null');
            $table->string('paragraf_5', 500)->default('Null');
            $table->string('link_youtube');
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
        Schema::dropIfExists('materis');
    }
};