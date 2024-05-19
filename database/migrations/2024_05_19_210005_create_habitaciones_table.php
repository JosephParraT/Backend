<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionesTable extends Migration
{
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('tipo');
            $table->decimal('precio_por_noche', 8, 2);
            $table->string('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}