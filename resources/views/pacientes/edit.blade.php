@extends('layouts.principal')

@section('content')
    <h1>Editar Paciente</h1>

    <form method="POST" action="{{ route('pacientes.update', $paciente->DNI) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre', $paciente->Nombre) }}" required>
        </div>

        <div class="form-group">
            <label for="Apellido">Apellido</label>
            <input type="text" name="Apellido" id="Apellido" class="form-control" value="{{ old('Apellido', $paciente->Apellido) }}" required>
        </div>

        <div class="form-group">
            <label for="Edad">Edad</label>
            <input type="number" name="Edad" id="Edad" class="form-control" value="{{ old('Edad', $paciente->Edad) }}" min="0">
        </div>

        <div class="form-group">
            <label for="Peso">Peso</label>
            <input type="number" name="Peso" id="Peso" class="form-control" value="{{ old('Peso', $paciente->Peso) }}" step="0.01" min="0">
        </div>

        <div class="form-group">
            <label for="Talla">Talla</label>
            <input type="text" name="Talla" id="Talla" class="form-control" value="{{ old('Talla', $paciente->Talla) }}" maxlength="5">
        </div>

        <div class="form-group">
            <label for="TipoSangre">Tipo de Sangre</label>
            <input type="text" name="TipoSangre" id="TipoSangre" class="form-control" value="{{ old('TipoSangre', $paciente->TipoSangre) }}" maxlength="5">
        </div>

        <div class="form-group">
            <label for="OtraInformacion">Otra Información</label>
            <textarea name="OtraInformacion" id="OtraInformacion" class="form-control">{{ old('OtraInformacion', $paciente->OtraInformacion) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
