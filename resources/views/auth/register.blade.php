@extends('layouts.auth-master')
@section('content')
    <form action="/register" method="POST">
    @csrf
        <div class="form-floating mb-3">
            <input type="text" placeholder="name" name="name" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" placeholder="lastname" name="lastname" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Lastname</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" placeholder="email@example.com" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-floating mb-3">
            <input type="number" placeholder="dni" name="dni" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">DNI</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" placeholder="birthdate" name="birthdate" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Birthdate</label>
        </div>
        <div class="form-floating mb-3">
             <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" placeholder="Password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
        </div>
        <div class="mb-3 ">
                <a href="/login">Login</a>
        </div>
       
        <button type="submit" class="btn btn-primary">Create account</button>
    </form>
@endsection
