<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <script src="https://kit.fontawesome.com/a6a5cc7eb9.js" crossorigin="anonymous"></script>
</head>
<style>
    .logo{
    margin-top: 10%;
    height: 8vh;
}
    .container-sidebar{
        flex:1;
    }

    .color-modal-header{
        background-color: #0E2334;
        color: #FFFFFF;
    }


</style>
<body>
    <div class="container-fluid container-sidebar">
        <div class="row flex-wrap">
            <div class="bg-dark col-auto min-vh-100 ">
                <div class="bg-dark p-2">
                    <a href="/home" class="d-flex text-decoration-none mt-1 align-items-center text-white">
                        <img class="logo img-fluid d-none d-sm-inline" src="{{ url('assets/img/logo_web_verde.png')}}">
                        <!--<img class="logo img-fluid d-none d-sm-inline" src="assets/img/logo_web_verde.png">-->
                        <!--<span class="fs-4 d-none d-sm-inline">Reliser Safety Training</span>-->
                    </a>
                    <ul class="nav nav-pills flex-column mt-4 ">
                    @if(auth()->user() && auth()->user()->role === 'admin')
                        <li class="nav-item py-2 ">
                            <a href="/dashboard" class="nav-link text-white" >
                                <!--<i class=" fa-solid fa-gauge"></i>--><span class="fs-5 ms-3 d-none d-sm-inline ">Dashboard</span>
                            </a>
                        
                        </li>
                    @endif
                        <li class="nav-item py-2 py-sm-0">
                            <a href="/home" class="nav-link text-white" >
                                <i class="fa-solid fa-house"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Home</span>
                            </a>
                          
                        </li>
                       
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#ModalProfile"  class="nav-link text-white" >
                                <i class=" fa-solid fa-user"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Perfil</span>
                                   
                            </a>
                         
                            @include('profile.modal.index')
                        </li>      
                        @if(auth()->user() && auth()->user()->role === 'admin')
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="{{ route('cursos.index') }}" class="nav-link text-white" >
                                <i class="fa-solid fa-book"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Cursos</span>
                            </a>
                           
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="{{ route('certificados.index') }}" class="nav-link text-white" >
                                <i class=" fa-solid fa-table-list"></i><span class="fs-5 ms-3 d-none d-sm-inline ">Certific.</span>
                            </a>
                         
                        </li>
                        @endif
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/logout" class="nav-link text-white" >
                                <i class="fa-solid fa-right-from-bracket"></i><span class="fs-5 ms-3 d-none d-sm-inline ">LogOut</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown  p-3">
                    <button class="btn border-none dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i><span class="ms-2">{{auth()->user()->name ??auth()->user()->email}}</span>
                    </button>  
                    <ul class="navbar-nav me-5 mb-5 mb-lg-0 ">
                        @auth
                            <li class="nav-item dropdown">
                                <ul class="dropdown-menu">
                                    {{-- <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li> --}}
                                    {{--<li><hr class="dropdown-divider"></li>--}}
                                    <li>
                                        <a class="dropdown-item" href="/logout">
                                            <i class="fa-solid fa-right-from-bracket"></i> LogOut
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li> 
                        @endauth
                        
                    </ul>

                </div>
            </div>
            
        </div>
       
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
