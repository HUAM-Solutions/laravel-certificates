@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>Cursos</h1>
    <a href="{{ route('cursos.create') }}" class="btn btn-primary">Crear Curso</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nombre }}</td>
                <td>{{ $curso->codigo }}</td>
                <td>
                    <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('cursos.destroy', $curso) }}" method="POST" style="display:inline;">
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
