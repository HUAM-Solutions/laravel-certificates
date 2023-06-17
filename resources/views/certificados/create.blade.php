@extends('layouts.app-master')
@section('content')
<div class="container my-3">
    <h1>Cursos</h1>
    <hr/>
    <form action="{{ route('certificados.store') }}" method="POST">
        @csrf
        <div class="position-relative">
        <div class="card  border-secondary mb-3" style="max-width: 540px;">
          <div class="card-header">
              <h3>Crear Curso</h3>
          </div> 
          <div class="card-body">
            <div class="form-group mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group mb-3">
                <label for="codigo">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo" required>
            </div>
            <div class="form-group mb-3">
                <label for="curso_id">Curso</label>
                <select class="form-control" id="curso_id" name="curso_id">
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                    @endforeach
                </select>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </div>  
        </div>
    </form>
</div>
@endsection

