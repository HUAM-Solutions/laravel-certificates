<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion de login</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}"> 
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<style>
    body{
        background-color: #00CACA;
        background: linear-gradient(to right,#32aada,#3ff5fc)
        width:100%;
        display:flex;
        align-items: center;
        justify-content: center;
    }
    .form-container{
        width: 400px;
    }
    .bg{
        background-image: url(../public/assets/img/curso.jpg);
        background-position: center center
    }

</style>
<body>
    <div class="form-container">
        @yield('content')
    </div>

    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>