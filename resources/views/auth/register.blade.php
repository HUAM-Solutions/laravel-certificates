@extends('layouts.auth-register')
@section('content')
    <div class="">
        <form action="/register" method="POST">
            @csrf

            @include('layouts.messages')
            <div class="form-floating mb-3">
                <input type="text" placeholder="name" name="name" class="form-control" >
                <label  class="form-label">Nombre <i class="fa-solid fa-asterisk fa-xs"></i></label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" placeholder="lastname" name="lastname" class="form-control">
                <label class="form-label">Apellidos <i class="fa-solid fa-asterisk fa-xs"></i></label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" placeholder="email" name="email" class="form-control">
                <label class="form-label">E-mail <i class="fa-solid fa-asterisk fa-xs"></i></label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" placeholder="dni" name="dni" class="form-control">
                <label class="form-label">DNI <i class="fa-solid fa-asterisk fa-xs"></i></label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" placeholder="birthdate" name="birthdate" class="form-control">
                <label class="form-label">Fecha de nacimiento <i class="fa-solid fa-asterisk fa-xs"></i></label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" placeholder="password" name="password" class="form-control">
                <label class="form-label">Contraseña <i class="fa-solid fa-asterisk fa-xs"></i></label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" placeholder="confirm_password" name="password_confirmation" class="form-control">
                <label class="form-label">Confirmar contraseña <i class="fa-solid fa-asterisk fa-xs"></i></label>
            </div>
            <div class="mb-3 ">
                <span >¿Ya tienes una cuenta? <a href="/login" class="btn-login">Iniciar sesión</a></span>
            </div>
            <div class="d-grid">
            <button type="submit" class="btn btn-register ">Crear cuenta</button>
            </div>

        </form>
    </div>
     
@endsection

