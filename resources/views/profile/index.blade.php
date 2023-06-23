@extends('layouts.app-master')
@section('content')
<div class="container my-5" >
    <div class="d-flex flex-column justify-content-center align-items-center">
    <form>
        <div class="card card-profile border-secondary mb-3 " style="max-width: 640px;">
          <div class="card-header border-info">
            <h4 class="card-title">Perfil de usuario</h4>
          </div> 
          <div class="card-body border-info">
            <div class="row">
                <div class="col">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" value="{{auth()->user()->name}}" class="form-control"  disabled readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="lastname" class="form-label">Apellido</label>
                        <input type="text" value="{{auth()->user()->lastname}}" class="form-control"  disabled readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" value="{{auth()->user()->dni}}" class="form-control"  disabled readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group mb-3">
                        <label for="dni" class="form-label">Fecha de nacimiento</label>
                        <input type="text" value="{{auth()->user()->birthdate}}" class="form-control"  disabled readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" value="{{auth()->user()->email}}"  class="form-control" class="form-control"  disabled readonly> 
                    </div>
                </div>
            </div>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-warning" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#ModalEdit" >
            <i class="fa-sharp fa-regular fa-pen-to-square"></i> Configurar    
            </a>                 
          </div>
        </div>  
    </form>
</div>
@include('profile.modal.edit')
@endsection