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

<body>
    {{-- <div id="sidemenu" class="menu-collapse">
        <!--Header-->
        <div id="header" class="header">
            <div id="title"><span>Vida MRR</span></div>
            <div id="menu-btn">
                <di class="btn-hamburger"></di>
                <di class="btn-hamburger"></di>
                <di class="btn-hamburger"></di>
            </div>
        </div>
        <!--Profile-->
        <div id="profile">
            <div id="photo"><img src="../curso.jpg" alt=""></div>
            <div id="name"><span>{{auth()->user()->name ??auth()->user()->email}}</span></div>
        </div>
        <!--Items-->
        <div id="menu-items">
            <div class="item">
                <a href="">
                    <div class="icon"><img src="" alt=""></div>
                    <div class="title"><span>Cloud services</span></div>
                </a>
            </div>
            <div class="item separator">
                
            </div>
        </div>

    </div>
    <div id="main-container"></div>
    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', =>{
            menu.classList.toggle('menu-expanded');
            menu.classList.toggle('menu-collapsed');
            document.querySelector('body').classList.toggle('body-expanded')
        })
    </> --}}


    <div class="container-fluid">
        <div class="row flex-wrap">
            <div class="bg-dark col-auto col-md-4 col-lg-3 min-vh-100 d-flex flex-column justify-content-between">
                <div class="bg-dark p-2">
                    <a href="/home" class="d-flex text-decoration-none mt-1 align-items-center text-white">
                        <span class="fs-4 d-none d-sm-inline">Reliser Safety Training</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white" >
                                <i class="fa-solid fa-gauge"></i><span class="fs-5 ms-3 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="/home" class="nav-link text-white" >
                                <i class="fa-solid fa-house"></i><span class="fs-5 ms-3 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/profile" class="nav-link text-white" >
                                <i class="fa-solid fa-user"></i><span class="fs-5 ms-3 d-none d-sm-inline">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="{{ route('cursos.index') }}" class="nav-link text-white" >
                                <i class="fa-solid fa-book"></i><span class="fs-5 ms-3 d-none d-sm-inline">Cursos</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="{{ route('certificados.index') }}" class="nav-link text-white" >
                                <i class="fa-solid fa-table-list"></i><span class="fs-5 ms-3 d-none d-sm-inline">Certific.</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0 ">
                            <a href="/logout" class="nav-link text-white" >
                                <i class="fa-sharp fa-regular fa-right-from-bracket"></i><span class="fs-5 ms-3 d-none d-sm-inline">LogOut</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown  p-3">
                    <button class="btn border-none dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i><span class="ms-2">{{auth()->user()->name ??auth()->user()->email}}</span>
                    </button>  
                    <ul class="dropdown-menu" aria-labelledby="triggerId">
                        <li class="dropdown-item" href=/profile">Setting</li>
                        <li class="dropdown-item" href=/logout">LogOut</li>
                    </ul>
                </div>
            </div>
            {{-- <div class="container">
                @yield('content')
            </div>  --}}
            
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
