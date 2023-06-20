@extends('layouts.app-master')
@section('content')
<div class="container my-3 ">
    <h1>Cursos</h1>
    <hr/>
    <div class="row justify-content-center ">
        <div class="col-md-6">
          <form action="{{ route('cursos.store') }}" method="POST">
              @csrf
              <div class="card card-profile  border-secondary mb-3" >
                  <div class="card-header border-secondary">
                      <h3>Crear Curso</h3>
                  </div> 
                <div class="card-body border-secondary">
                  <div class="form-group mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                  </div>
                  <div class="form-group mb-3">
                      <label for="codigo">Código</label>
                      <input type="text" class="form-control" id="codigo" name="codigo" required>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Guardar</button>
                </div> 
              </div>
          </form>
      </div>
    </div>
</div>
@endsection


