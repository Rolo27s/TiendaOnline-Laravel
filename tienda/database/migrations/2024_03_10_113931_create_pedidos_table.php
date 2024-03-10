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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('tipoDeEnvio')->nullable(); // 1-> recogida en tienda, 2-> envio express, 3-> envio regular
            $table->unsignedBigInteger('codigoPedido'); // referencia ficticia, en un futuro se podría programar correctamente como clave foránea a una tabla que contenga la información de los productos incluidos en el pedido
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
