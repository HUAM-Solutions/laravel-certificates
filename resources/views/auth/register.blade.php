@extends('layouts.auth-register')
@section('content')
    <div class="container bg-white  my-3 py-3 rounded">
        <form action="/register" method="POST">
            @csrf
            <h1 class="text-center">Create account</h1>
            @include('layouts.messages')
            <div class="form-floating mb-3">
                <input type="text" placeholder="name" name="name" class="form-control" >
                <label  class="form-label">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" placeholder="lastname" name="lastname" class="form-control">
                <label class="form-label">Lastname</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" placeholder="email" name="email" class="form-control">
                <label class="form-label">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" placeholder="dni" name="dni" class="form-control">
                <label class="form-label">DNI</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" placeholder="birthdate" name="birthdate" class="form-control">
                <label class="form-label">Birthdate</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" placeholder="password" name="password" class="form-control">
                <label class="form-label">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" placeholder="confirm_password" name="password_confirmation" class="form-control">
                <label class="form-label">Confirm Password</label>
            </div>
            <div class="mb-3 ">
                <span>¿Ya tiene una cuenta? <a href="/login">Login</a></span>
            </div>
            <button type="submit" class="btn btn-primary w-100 ">Create account</button>
            
        
        </form>
    </div>
     
@endsection

