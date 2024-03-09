<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carrito', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catalogo_id'); // campo en el que se va a guardar el ID del producto
            $table->foreign('catalogo_id')->references('id')->on('catalogos')->onDelete('cascade'); // declaración de la foreign key
            $table->integer('cantidad'); // campo en el que se va a guardar la cantidad del producto indicado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrito');
    }
};
