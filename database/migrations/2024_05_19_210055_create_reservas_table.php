<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('reservas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('habitacion_id')->constrained('habitaciones');
        $table->foreignId('cliente_id')->constrained('clientes');
        $table->date('fecha_entrada');
        $table->date('fecha_salida');
        $table->string('estado');
        $table->decimal('total', 8, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
