<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriaClinica extends Model
{
    protected $table = 'historias_clinicas';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'DNI_Paciente',
        'FechaConsulta',
        'Diagnostico',
        'Tratamiento',
    ];

    // Relación con Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'DNI_Paciente', 'DNI');
    }
}
