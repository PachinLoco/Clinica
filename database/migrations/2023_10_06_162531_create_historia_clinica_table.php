<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriaClinicaTable extends Migration
{
    public function up()
    {
        Schema::create('historia_clinica', function (Blueprint $table) {
            $table->id();
            $table->string('DNI_Paciente', 10);
            $table->date('FechaConsulta');
            $table->text('Diagnostico');
            $table->text('Tratamiento');
            $table->timestamps();

            $table->foreign('DNI_Paciente')->references('DNI')->on('pacientes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historia_clinica');
    }
}

