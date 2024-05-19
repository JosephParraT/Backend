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
    Schema::create('habitaciones', function (Blueprint $table) {
        $table->id();
        $table->string('numero');
        $table->string('tipo');
        $table->decimal('precio_por_noche', 8, 2);
        $table->string('estado');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
