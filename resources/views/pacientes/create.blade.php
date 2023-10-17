@extends('layouts.principal')

@section('content')
    <h1>Crear Paciente</h1>
    <form method="POST" action="{{ route('pacientes.store') }}">
        @csrf
        <div class="form-group">
            <label for="DNI">DNI:</label>
            <input type="text" name="DNI" id="DNI" class="form-control" required>
        </div>        
        <div class="form-group">
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Apellido">Apellido:</label>
            <input type="text" name="Apellido" id="Apellido" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Edad">Edad:</label>
            <input type="number" name="Edad" id="Edad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Peso">Peso:</label>
            <input type="number" name="Peso" id="Peso" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Talla">Talla:</label>
            <input type="number" name="Talla" id="Talla" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="TipoSangre">Tipo de Sangre:</label>
            <input type="text" name="TipoSangre" id="TipoSangre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="OtraInformacion">Otra Información:</label>
            <textarea name="OtraInformacion" id="OtraInformacion" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary mt-3">Volver a la Lista de Pacientes</a>
@endsection
