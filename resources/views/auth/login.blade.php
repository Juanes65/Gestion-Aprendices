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

        <form method="POST" action="{{ route('login') }}" class="formulario__login">
            @csrf

            <div class="d-flex justify-content-center col-12">
                <h1 class="texto">Ingresar</h1>
            </div>
            
            <div class="box">
                <input type="email" required="required" id="email" type="email"  class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                <span>Correo Electronico</span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="box">
                <input type="password" required="required" id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <span>Contraseña</span>
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

    </div>

</body>
</html>
