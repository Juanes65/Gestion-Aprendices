<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
        }
        table {
            font-size: 12px;
        }
        h5{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="">
            <h5 class="d-flex justify-content-center font-weight-bold">Historial Ubicacion del Aprendiz</h5>
        </div>
        <table class="table table-bordered mt-5">
            <thead class="table-secondary">
                <tr style="text-align: center">
                    <th scope="col">Ficha</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Dormitorio</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Fecha de Salida</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cupos as $info)
                    <tr style="text-align: center">
                        <td>{{$info->ficha}}</td>
                        <td>{{$info->cc}}</td>
                        <td>{{$info->nombre}}</td>
                        <td>{{$info->apellido}}</td>
                        <td>{{$info->genero}}</td>
                        <td>{{$info->nombre_dor}}</td>
                        <td>{{$info->fecha_ingreso}}</td>
                        <td>{{$info->fecha_salida}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
