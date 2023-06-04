<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion de login</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}"> 
    <!-- Bootstrap CSS -->
    <style>
        .sidebar {
            width: 60%;
        }
    </style>
</head>
<body>
    <div class="row flex-wrap sidebar">
        <div class="bg-dark col-auto col-md-4 col-lg-3 min-vh-100 d-flex flex-column justify-content-between">
            @include('layouts.sidebar')
        </div>
        <div class="col">
            @yield('content')
        </div>
    </div>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script> 
</body>
</html>
