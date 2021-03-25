<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propiedades</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .table-top{
            padding-top: 80px;
        }
        .letra{
            font-size: 10px;
            padding-top: 50px;
        }
    </style>
</head>
<body>

    <div>
        <div class="float-right">
            <img src="{{ asset('assets/img/logo/logo.png')}}" width="90px" height="40px">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-top"><h2 class="text-center"><u>Resultados de búsqueda por filtro</u></h2></div>
        </div>
    </div>

    <table class="table table-bordered letra">
        <thead class="thead" style="background-color: #1C4482; color: white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tablaje</th>
                <th scope="col">Solar</th>
                <th scope="col">Finca</th>
                <th scope="col">Parcela</th>
                <th scope="col">Propietario</th>
                <th scope="col">Entidad</th>
                <th scope="col">Localidad</th>
                <th scope="col">Dirección</th>
                <th scope="col">Nombre Corto</th>
                <th scope="col">Superficie Terreno</th>
                <th scope="col">Valor Comercial</th>
                <th scope="col">Valor Catastral</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->tablaje }}</td>
                    <td>{{ $item->solar }}</td>
                    <td>{{ $item->finca }}</td>
                    <td>{{ $item->parcela }}</td>
                    <td>{{ $item->propietario }}</td>
                    <td>{{ $item->entidad_federativa }}</td>
                    <td>{{ $item->localidad }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>{{ $item->nombre_corto }}</td>
                    <td>{{ $item->superficie_terreno }} m<sup>2</sup></td>
                    <td>${{ number_format($item->valor_comercial, 2) }}</td>
                    <td>${{ number_format($item->valor_catastral, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>