<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->string('DNI', 10)->primary();
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->integer('Edad')->nullable();
            $table->decimal('Peso', 5, 2)->nullable();
            $table->decimal('Talla', 5, 2)->nullable();
            $table->string('TipoSangre', 5)->nullable();
            $table->text('OtraInformacion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}