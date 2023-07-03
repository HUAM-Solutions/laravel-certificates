<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.png">
    <title>Reliser Safety Training - Registro</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <script src="https://kit.fontawesome.com/a6a5cc7eb9.js" crossorigin="anonymous"></script>

</head>
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh; /* Asegúrate de que el body ocupe el 100% del alto de la ventana */
    }

    .background-container {
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        min-height: 100%;
    }

    .form-container {
        opacity: 0.9;
        width: 400px;
        margin-top: 25%;
        position: relative;
        z-index: 1; /* Asegúrate de que el z-index sea mayor que el del fondo SVG */
    }


    svg {
		position: absolute;
		top: 0;
		left: 0;
        width: 100%;
        height: 160vh; /**Falta arreglar */
		box-sizing: border-box;
		display: block;
		background-color: #0e4166;
        background-image: linear-gradient(to bottom, rgba(14, 65, 102, 0.86), #0e4166);
	}

    .btn{
        background-color: #00CCCB;
        color: #0E2334;
    }

    .btn:hover{
        background-color: #001E31;
        color: #FFFFFF;
    }

    .btn-login{
        text-decoration: none;
        color: #0E2334;
        font-weight: bold;
    }

    .btn-login:hover{
        color: #00CCCB; 
    }

    .fa-solid{
        color: #c3132e;
    }

    .header-color-auth{
        padding-top: 2%;
        background-color: #0E2334;
        color: #FFFFFF;
        border-radius: 10px;
    }

</style>

<body>

    <div class="background-container">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="100%" height="100%" viewBox="0 0 1700 900" preserveAspectRatio="xMidYMax slice">
            <defs>
                <linearGradient id="bg">
                    <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
                    <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
                    <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
                </linearGradient>
                <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
        s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
            </defs>
            <g>
                <use xlink:href='#wave' opacity=".3">
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s"
                        calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1"
                        keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                </use>
                <use xlink:href='#wave' opacity=".6">
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s"
                        calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1"
                        keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                </use>
                <use xlink:href='#wave' opacty=".9">
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s"
                        calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1"
                        keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                </use>
            </g>
        </svg>
    </div>
    
    <main class="form-container">

        @yield('content')
    </div>

    

    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>