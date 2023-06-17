@extends('layouts.app-master')
@section('content')

    <h1 class="container">Dashboard</h1>
    <hr/>
    @auth
        <p>Bienvenido <code>{{auth()->user()->name}} {{auth()->user()->lastname}}</code>, estas autenticado a la pagina</p>
    @endauth

    <div class="container">
        <div class="row">
            <div class="col ">
                <div class="card text-center text-white" style="max-width: 540px;">
                    <div class="card-body color1-card">
                        <h6 class="fs-5 card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <h3 class="fs-1 card-title">1,550</h3> 
                        <h6 class="card-subtitle mb-2 ">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center text-white" style="max-width: 540px;">
                    <div class="card-body color2-card">
                        <h6 class="fs-5 card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <h3 class="fs-1 card-title">1,550</h3> 
                        <h6 class="card-subtitle mb-2 ">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center text-white" style="max-width: 540px;">
                    <div class="card-body color3-card">
                        <h6 class="fs-5 card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <h3 class="fs-1 card-title">1,550</h3> 
                        <h6 class="card-subtitle mb-2 ">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center text-white" style="max-width: 540px;">
                    <div class="card-body color4-card">
                        <h6 class="fs-5 card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <h3 class="fs-1 card-title">1,550</h3> 
                        <h6 class="card-subtitle mb-2 ">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection