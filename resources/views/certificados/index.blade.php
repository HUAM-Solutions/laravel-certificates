@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>Certificados</h1>
    <hr/>
    <a href="{{ route('certificados.create') }}" type="button" class="button-color my-2">Crear Certificado</a>
    <table class="table ">
        <thead class="bg-table-head">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table-light">
        @foreach($certificados as $certificado)
            <tr>
                <td>{{ $certificado->id }}</td>
                <td>{{ $certificado->nombre }}</td>
                <td>{{ $certificado->codigo }}</td>
                <td>
                    <a href="{{ route('certificados.edit', $certificado) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('certificados.destroy', $certificado) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
