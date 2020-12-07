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
            font-size: 12px;
        }
    </style>
</head>
<body>

	<div>
        <div class="float-right">
            <img src="https://d500.epimg.net/cincodias/imagenes/2015/05/08/pyme/1431098283_691735_1431098420_noticia_normal.jpg" width="80px" height="80px">
        </div>
    </div>

    <table class="table table-bordered table-top letra">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Entidad</th>
                <th scope="col">Localidad</th>
                <th scope="col">Direccion</th>
                <th scope="col">Nombre Corto</th>
                <th scope="col">Propietario</th>
                <th scope="col">Superficie Terreno</th>
                <th scope="col">Valor Comercial</th> 
                <th scope="col">Valor Catastral</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
	        	<tr>
	                <td>{{ $item->id }}</td>
	                <td>{{ $item->entidad_federativa }}</td>
                    <td>{{ $item->localidad }}</td>
                    <td>{{ $item->direccion }}</td>
	                <td>{{ $item->nombre_corto }}</td>
                    <td>{{ $item->propietario }}</td>
	                <td>{{ $item->superficie_terreno }} m<sup>2</sup></td>
	                <td>${{ number_format($item->valor_comercial, 2) }}</td>
	                <td>${{ number_format($item->valor_catastral, 2) }}</td> 
	            </tr>
        	@endforeach
        </tbody>
    </table>
	
</body>
</html>
