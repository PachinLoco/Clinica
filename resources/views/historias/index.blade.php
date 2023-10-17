@section('content')
    <h1>Lista de Historias Clínicas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Fecha de Consulta</th>
                <th>Diagnóstico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($historias as $historia)
                <tr>
                    <td>{{ $historia->paciente->Nombre }} {{ $historia->paciente->Apellido }}</td>
                    <td>{{ $historia->FechaConsulta }}</td>
                    <td>{{ $historia->Diagnostico }}</td>
                    <td>
                        <a href="{{ route('historias.edit', $historia->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('historias.destroy', $historia->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('historias.create') }}" class="btn btn-success">Agregar Historia Clínica</a>
@endsection
