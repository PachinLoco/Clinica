<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
    protected $primaryKey = 'DNI';
    public $incrementing = false;
    protected $fillable = ['DNI', 
    'Nombre', 
    'Apellido', 
    'Edad', 
    'Peso', 
    'Talla', 
    'TipoSangre', 
    'OtraInformacion'
    ];


    // Relación con HistoriaClinica
    public function historiasClinicas()
    {
        return $this->hasMany(HistoriaClinica::class, 'DNI_Paciente', 'DNI');
    }
}
