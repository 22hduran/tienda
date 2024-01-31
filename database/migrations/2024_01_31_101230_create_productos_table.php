<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idColeccion');
            $table->text('camiseta');
            $table->integer('precio');
            $table->integer('stock');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};