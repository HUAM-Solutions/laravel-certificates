<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.png">
    <title>Reliser Safety Training - Inicio de Sesión</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}"> 
</head>
<style>

    body{
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
    }

    body{
    background: linear-gradient(318deg, #0E2334, #00CCCB, #0E2334, #00CCCB, #0E2334);
    background-size: 1000% 1000%;
    
    -webkit-animation: Coolgradient 41s linear infinite;
    -moz-animation: Coolgradient 41s linear infinite;
    -o-animation: Coolgradient 41s linear infinite;
    animation: Coolgradient 41s linear infinite;
    }

    @-webkit-keyframes Coolgradient {
        0%{background-position:5% 0%}
        50%{background-position:96% 100%}
        100%{background-position:5% 0%}
    }
    @-moz-keyframes Coolgradient {
        0%{background-position:5% 0%}
        50%{background-position:96% 100%}
        100%{background-position:5% 0%}
    }
    @-o-keyframes Coolgradient {
        0%{background-position:5% 0%}
        50%{background-position:96% 100%}
        100%{background-position:5% 0%}
    }
    @keyframes Coolgradient { 
        0%{background-position:5% 0%}
        50%{background-position:96% 100%}
        100%{background-position:5% 0%}
    }

    .bg{
        background-color: #0E2334;
        height: 80vh;
    }
    .btn-login{
        background-color: #00CCCB;
        color: #0E2334;
        
    }
    .btn-login:hover{
        background-color: #001E31;
        color: #FFFFFF;
    }
    .btn-register{
        text-decoration: none;
        color: #0E2334;
        font-weight: bold;
    }
    .btn-register:hover{
        color: #00CCCB; 
    }

    .carousel-control-slide{
        margin-top: 10%;
        
    }
    .carousel-control-slide img{
        border-radius: 15px;
    }
    .container{
        background-color: #0E2334;
    }

    .logo{
        margin-top: 10%;
        height: 15%;
    }



</style>
<body>
    <div class="container w-75 mt-5 mb-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                <img class="logo" src="assets/img/logo_web_verde.png">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active carousel-control-slide">
                        <img src="assets/img/brigadas.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item carousel-control-slide">
                        <img src="assets/img/brigadas-1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item carousel-control-slide">
                        <img src="assets/img/post.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col bg-white py-5 rounded-end">
                <div >
                    <h2 class="fw-bold text-center ">Iniciar sesión</h2>
                    <hr/>
                </div>
                <main class="form-container">
                    @yield('content')
                </main>
                <!--
                {{--Login con redes sociales--}}
                <div class="container w-100 my-4">   
                    <div class="row text-center">
                        <div class="col-12">Iniciar sesion</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="/assets/img/facebook.svg" width="32" alt="">
                                    </div>
                                    <div class="col-12 col-md-10 text-center">
                                        Facebook
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img href="{{url('/public/assets/img/facebook1.png')}}" width="32" alt="">
                                    </div>
                                    <div class="col-12 col-md-10 text-center">
                                        Google
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>

    </div>

    

    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>