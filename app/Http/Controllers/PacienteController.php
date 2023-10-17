<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Http\Requests\PacienteRequest;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(PacienteRequest $request)
    {
        $paciente = new Paciente();
        $paciente->DNI = $request->input('DNI');
        $paciente->Nombre = $request->input('Nombre');
        $paciente->Apellido = $request->input('Apellido');
        $paciente->Edad = $request->input('Edad');
        $paciente->Peso = $request->input('Peso');
        $paciente->Talla = $request->input('Talla');
        $paciente->TipoSangre = $request->input('TipoSangre');
        $paciente->OtraInformacion = $request->input('OtraInformacion');
        $paciente->save();

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente creado exitosamente.');
    }


    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.edit', compact('paciente'));
    }


    public function update(PacienteRequest $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->Nombre = $request->input('Nombre');
        $paciente->Apellido = $request->input('Apellido');
        $paciente->Edad = $request->input('Edad');
        $paciente->Peso = $request->input('Peso');
        $paciente->Talla = $request->input('Talla');
        $paciente->TipoSangre = $request->input('TipoSangre');
        $paciente->OtraInformacion = $request->input('OtraInformacion');
        $paciente->save();

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente eliminado exitosamente.');
    }

    public function exportarJson()
    {
        $pacientes = Paciente::all();
        $pacientesJson = $pacientes->toJson(JSON_PRETTY_PRINT);

        return view('pacientes.json', ['pacientesJson' => $pacientesJson]);
    }

    public function xml()
    {
        $pacientes = Paciente::all();

        $xml = new \XMLWriter();
        $xml->openMemory();
        $xml->startDocument('1.0', 'UTF-8');
        $xml->startElement('pacientes');

        foreach ($pacientes as $paciente) {
            $xml->startElement('paciente');

            $xml->writeElement('DNI', $paciente->DNI);
            $xml->writeElement('Nombre', $paciente->Nombre);
            $xml->writeElement('Apellido', $paciente->Apellido);
            $xml->writeElement('Edad', $paciente->Edad);
            $xml->writeElement('Peso', $paciente->Peso);
            $xml->writeElement('Talla', $paciente->Talla);
            $xml->writeElement('TipoSangre', $paciente->TipoSangre);
            $xml->writeElement('OtraInformacion', $paciente->OtraInformacion);

            $xml->endElement();
        }

        $xml->endElement();
        $xml->endDocument();

        $xmlData = $xml->outputMemory();

        return view('pacientes.xml', compact('xmlData'));
    }

}
