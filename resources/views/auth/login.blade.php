@extends('layouts.auth-login')
@section('content')
   
    <form action="/login" method="POST">
        @csrf
        @include('layouts.messages')
        <div class="form-floating mb-4">
            <input type="email" placeholder="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="email" class="form-label">Email address</label>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-floating mb-4">
            <input type="password" placeholder="password" name="password" class="form-control" id="exampleInputPassword1">
            <label for="password" class="form-label">Password</label>
        </div>
        <div class="mb-4">
            <span>Create una cuenta <a href="/register">Create account</a></span> 
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
                

    
    
    {{-- <form action="/login" method="POST">
            @csrf
            <h1>Login</h1>
            @include('layouts.messages')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 ">
                <a href="/register">Create account</a>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}
@endsection
    
