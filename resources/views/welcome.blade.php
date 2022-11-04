<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <div class="d-flex justify-content-center caja">
            
            <div class="col-lg-6 col-6 d-flex justify-content-center bd-highlight">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="text-decoration: none; color:rgb(0, 0, 0); font-family: 'caviar_dreamsregular'; font-size:18px">Ingresar</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="text-decoration: none; color:rgb(0, 0, 0); font-family: 'caviar_dreamsregular'; font-size:15px">Iniciar Sesion</a>
        
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