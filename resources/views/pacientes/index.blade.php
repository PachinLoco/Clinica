@extends('layouts.principal')

@section('content')
    <h1>Lista de Pacientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Peso</th>
                <th>Talla</th>
                <th>TipoSangre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->DNI }}</td>
                    <td>{{ $paciente->Nombre }}</td>
                    <td>{{ $paciente->Apellido }}</td>
                    <td>{{ $paciente->Edad }}</td>
                    <td>{{ $paciente->Peso }}</td>
                    <td>{{ $paciente->Talla }}</td>
                    <td>{{ $paciente->TipoSangre }}</td>
                    <td>{{ $paciente->OtraInformacion }}</td>
                    <td>
                        <a href="{{ route('pacientes.edit', $paciente->DNI) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('pacientes.destroy', $paciente->DNI) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('pacientes.create') }}" class="btn btn-success">Agregar Paciente</a>
    <a href="{{ route('pacientes.json') }}" class="btn btn-primary">Ver JSON</a>
    <a href="{{ route('pacientes.xml') }}" class="btn btn-primary">Ver XML</a>
@endsection
