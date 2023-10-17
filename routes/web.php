<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoriaClinicaController;

Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');
Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacientes.store');
Route::get('/pacientes/{DNI}/edit', [PacienteController::class,'edit'])->name('pacientes.edit');
Route::put('/pacientes/{DNI}', [PacienteController::class, 'update'])->name('pacientes.update');
Route::patch('/pacientes/{DNI}', [PacienteController::class, 'update'])->name('pacientes.update.patch');
Route::delete('/pacientes/{DNI}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');
Route::get('/pacientes/json', [PacienteController::class, 'exportarJson'])->name('pacientes.json');
Route::get('/pacientes/xml', [PacienteController::class, 'xml'])->name('pacientes.xml');


Route::get('/historias', [HistoriaClinicaController::class, 'index'])->name('historias.index');
Route::get('/historias/create', [HistoriaClinicaController::class, 'create'])->name('historias.create');
Route::post('/historias', [HistoriaClinicaController::class, 'store'])->name('historias.store');
Route::get('/historias/{id}/edit', [HistoriaClinicaController::class, 'edit'])->name('historias.edit');
Route::put('/historias/{id}', [HistoriaClinicaController::class, 'update'])->name('historias.update');
Route::patch('/historias/{id}', [HistoriaClinicaController::class, 'update'])->name('historias.update.patch');
Route::delete('/historias/{id}', [HistoriaClinicaController::class, 'destroy'])->name('historias.destroy');

Route::get('/', function () {
    return view('welcome');
});
