@extends('layouts.app-master')
@section('content')

    <h1 class="container">Home</h1>
    @auth
        <p>Bienvenido {{auth()->user()->name ??auth()->user()->email}}, estas autenticado a la pagina</p>
        <p>
            <a href="logout">logout</a>
        </p>
    @endauth

    @guest
        <p>para ver el contenido <a href="/login">inicia sesion</a></p>
    @endguest
@endsection