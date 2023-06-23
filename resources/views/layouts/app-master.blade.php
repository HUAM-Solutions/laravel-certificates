<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('assets/img/logo.png')}}">
    <title>Reliser Safety Training</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}"> 
    <!-- Bootstrap CSS -->
    <style>
        
        .bg-head{
            background-color: #00CCCB;
            color:  #0E2334;
        }
        .bg-table-head{
            background-color:#0E2334;
            color: #FFFFFF;
        }
        .card-profile .card-header{
            background-color: #0E2334;
            color: #FFFFFF;
        }
        .content{
            width: 100vw;
            height: 50vh;
            display: flex;
        }
        .content-view{
            flex:4;
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
            background-color: #fcfdfc;
            padding-top: 2%;
        }

        input[type="text"][disabled] {
            background-color: #FFFFFF;
        }
        input[type="email"][disabled] {
            background-color: #FFFFFF;
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
