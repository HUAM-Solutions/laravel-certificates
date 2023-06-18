<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.png">
    <title>Reliser Safety Training</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}"> 
    <!-- Bootstrap CSS -->
    <style>

        .content{
            width: 100vw;
            height: 50vh;
            display: flex;
        }

        .content-view{
            flex:5;
        }

        .color1-card{
            background-color: #F75455;
            border-radius: 10px;
            
        }
        .color2-card{
            background-color: #FFB026;
            border-radius: 10px;
        }
        .color3-card{
            background-color: #4FBAA0;
            border-radius: 10px;
        }
        .color4-card{
            background-color: #058588;
            border-radius: 10px;
        }

        .button-color{
            background-color: #00CCCB;
            border-radius: 10px;
            color: #0E2334;
            font-weight: 600;
            text-decoration: none;
            padding: 1%;
        }

        .button-color:hover{
            background-color: #0E2334;
            color: #00CCCB;
        }

        .content-view{
            padding-top: 2%;
        }


    </style>
</head>
<body>
    <div class="content row flex-wrap ">
        <div class=" bg-dark col-auto col-md-3 col-lg-2 min-vh-100 d-flex flex-column justify-content-between">
            @include('layouts.sidebar')
            
        </div>
        <div class="content-view col-md-8 col-lg-10  ">
            @yield('content')
        </div>
    </div>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script> 
</body>
</html>
