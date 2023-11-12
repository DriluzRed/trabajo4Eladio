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
        Schema::create('cargador_por_contenedor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contenedor_id');
            $table->unsignedBigInteger('cargamento_id');
            $table->integer('toneladas'); 
            $table->boolean('activo')->default(true);
            $table->string('origen', 40);
            $table->string('destino', 40);
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('contenedor_id')->references('id')->on('contenedores');
            $table->foreign('cargamento_id')->references('id')->on('cargamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
