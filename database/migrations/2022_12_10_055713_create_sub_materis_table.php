<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_materis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materi_id')
                ->constrained('materis')
                ->onDelete('cascade');
            $table->string('Nama_sub_materi');
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
        Schema::dropIfExists('sub_materis');
    }
};