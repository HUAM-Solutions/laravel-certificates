@extends('layouts.app-master')


@section('content')
<div class="container my-3">
    <h1>Cursos</h1>
    <hr>
    <div class="row justify-content-center ">
        <div class="col-md-6">
            <form action="{{ route('cursos.update', $curso) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="card card-profile border-secondary mb-3 " style="max-width: 540px;">
                <div class="card-header border-info">
                    <h4 class="card-title">Editar curso</h4>
                </div> 
                <div class="card-body border-info">
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $curso->nombre }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="codigo">Código</label>
                                <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $curso->codigo }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Guardar cambios</button>                
                </div>
                </div>  
            </form>
        </div>
    </div>
</div>
@endsection

