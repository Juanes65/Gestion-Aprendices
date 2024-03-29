<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio Sesiòn</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <div class="d-flex justify-content-center caja">
        <img style="position: absolute; top: 50px; left: 0; height: 200px" class="group list-group-image" src="{{asset('image/logo_iniciales.png')}}" />
        <form method="POST" action="{{ route('login') }}" class="formulario__login">
            @csrf
            <div class="d-flex justify-content-center col-12">
                <h1 class="texto">Iniciar Sesiòn</h2>
            </div>

            <div class="box">
                <h1 class="correo">Usuario</h1>
                <input type="email" required="required" id="email" type="email"  class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="box">
                <h1 class="password">Contraseña</h1>
                <input type="password" required="required" id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="d-flex justify-content-center col-12 boton">
                <button type="submit">Ingresar</button>
            </div>
        </form>



        <h1 class="barraArriba">barraArriba</h1>
        <h1 class="barraAbajo">barraAbajo</h1>

    </div>

</body>
</html>
