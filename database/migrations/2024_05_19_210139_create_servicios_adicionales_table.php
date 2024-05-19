<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosAdicionalesTable extends Migration
{
    public function up()
    {
        Schema::create('servicios_adicionales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios_adicionales');
    }
}
