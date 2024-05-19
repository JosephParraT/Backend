<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reserva_id')->constrained('reservas')->onDelete('cascade');
            $table->date('fecha_pago');
            $table->decimal('monto', 8, 2);
            $table->string('metodo_pago');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
