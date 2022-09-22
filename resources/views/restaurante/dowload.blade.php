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
            <h5 class="d-flex justify-content-center font-weight-bold">Historial Restaurante del Aprendiz</h5>
        </div>
        <table class="table table-bordered mt-5">
            <thead class="table-secondary">
                <tr style="text-align: center">
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Total Desayunos</th>
                    <th scope="col">Total Almuerzos</th>
                    <th scope="col">Total Cenas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $info)
                    <tr style="text-align: center">
                        <td>{{$info->cc}}</td>
                        <td>{{$info->nombre}}</td>
                        <td>{{$info->apellido}}</td>
                        <td>{{$info->desayuno}}</td>
                        <td>{{$info->almuerzo}}</td>
                        <td>{{$info->cena}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>