<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('camisetas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idColeccion')->references('id')->on('coleccion');
            $table->text('camiseta');
            $table->integer('precio');
            $table->string('urlFoto');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('camisetas');
    }
};
