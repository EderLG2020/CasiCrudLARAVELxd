<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('practicantes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->nullable();
            $table->integer("edad")->nullable();
            $table->string("correo_electronico")->nullable();
            $table->date("fecha_de_nacimiento")->nullable();
            $table->string("carrera_tecnica")->nullable();
            $table->string("escuela")->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('practicantes');
    }
};
