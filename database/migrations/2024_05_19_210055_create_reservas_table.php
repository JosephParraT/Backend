<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('habitacion_id')->constrained('habitaciones')->onDelete('cascade');
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->string('estado');
            $table->decimal('total', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
