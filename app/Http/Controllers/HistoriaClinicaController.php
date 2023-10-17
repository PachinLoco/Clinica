<?php

namespace App\Http\Controllers;
use App\Http\Requests\HistoriaClinicaRequest;
use Illuminate\Http\Request;
use App\Models\HistoriaClinica;

class HistoriaClinicaController extends Controller
{
    public function index()
    {
        $historias = HistoriaClinica::all();
        return view('historias.index', compact('historias'));
    }

    public function create()
    {
        return view('historias.create');
    }

    public function store(HistoriaClinicaRequest $request)
    {
        $historia = new HistoriaClinica();
        $historia->DNI_Paciente = $request->input('DNI_Paciente');
        $historia->FechaConsulta = $request->input('FechaConsulta');
        $historia->Diagnostico = $request->input('Diagnostico');
        $historia->Tratamiento = $request->input('Tratamiento');
        $historia->save();

        return redirect()->route('historias.index')
            ->with('success', 'Historia clínica creada exitosamente.');
    }

    public function edit($id)
    {
        $historia = HistoriaClinica::findOrFail($id);
        return view('historias.edit', compact('historia'));
    }

    public function update(HistoriaClinicaRequest $request, $id)
    {
        $historia = HistoriaClinica::findOrFail($id);
        $historia->DNI_Paciente = $request->input('DNI_Paciente');
        $historia->FechaConsulta = $request->input('FechaConsulta');
        $historia->Diagnostico = $request->input('Diagnostico');
        $historia->Tratamiento = $request->input('Tratamiento');
        $historia->save();

        return redirect()->route('historias.index')
            ->with('success', 'Historia clínica actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $historia = HistoriaClinica::findOrFail($id);
        $historia->delete();

        return redirect()->route('historias.index')
            ->with('success', 'Historia clínica eliminada exitosamente.');
    }
}

