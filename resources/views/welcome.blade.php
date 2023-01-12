<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <div class="d-flex justify-content-center caja">


            <div>

                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="text-decoration: none; color:rgb(0, 0, 0); font-family: 'caviar_dreamsregular'; font-size:18px">Ingresar</a>
                        @else
                            <img style="width: 450px;"  class="group list-group-image" src="{{asset('image/LOGO.jpg')}}" />
                            <p style="text-align: center; font-family: bold italic; font-size: 30px">Regional Antioquia</p>
                            <p style="text-align: center; font-family: bold italic; font-size: 30px">Centro de los Recursos Renovables</p>
                            <p style="text-align: center; font-family: bold italic; font-size: 30px">La Salada</p>
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-200 underline d-flex justify-content-center botonx" style="text-decoration: none; color:rgb(0, 0, 0); padding: 5px 20px 20px 5px; width:250px; position:absolute; left:830px; text-align: center">Iniciar Sesión</a>

                            <h1 class="barraArriba2">barraArriba</h1>
                            <h1 class="barraAbajo2">barraAbajo</h1>

                            {{-- @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline ms-2" style="text-decoration: none; color:rgb(0, 0, 0); font-family: 'caviar_dreamsregular'; font-size:15px">Registrarse</a>
                            @endif --}}
                        @endauth
                    </div>
                @endif
            </div>

    </div>

</body>
</html>
