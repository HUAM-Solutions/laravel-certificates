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
        background-color: #00CCCB;
        background: linear-gradient(to right,#32aada,#3ff5fc)
        width:100%;
        display:flex;
        align-items: center;
        justify-content: center;
        padding-top:0px;

    }
    .form-container{
        width: 100%;
    }
    .bg{
        background-image: url("../public/assets/img/curso.jpg");
        background-position: center center;
        background-color: #0E2334;
    }

</style>
<body>
    <div class="container w-75  mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>

            <div class="col bg-white p-3 rounded-end">
                <div class="tex-end">
                    <img src="" width="20" alt="">
                </div>
                <h2 class="fw-bold text-center ">Bienvenido</h2>
                <main class="form-container">
                    @yield('content')
                </main>
                {{--Login con redes sociales--}}
                <div class="container w-100 my-4">   
                    <div class="row text-center">
                        <div class="col-12">Iniciciar sesion</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="/public/assets/img/facebook.svg" width="32" alt="">
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
                </div>
            </div>
        </div>

    </div>

    

    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>