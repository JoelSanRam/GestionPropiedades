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
    </style>
</head>
<body>

	<div>
        <div class="float-right">
            <img src="https://d500.epimg.net/cincodias/imagenes/2015/05/08/pyme/1431098283_691735_1431098420_noticia_normal.jpg" width="80px" height="80px">
        </div>
    </div>

    <table class="table table-bordered table-top">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Entidad Federativa</th>
                <th scope="col">Municipio</th>
                <th scope="col">Localidad</th>
                <th scope="col">Folio Reg Pub</th>
                <th scope="col">Folio Catastral</th>
                <th scope="col">Superficie Terreno</th>
                <th scope="col">Valor Comercial</th> 
                <th scope="col">Valor Catastral</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
	        	<tr>
	                <td>{{ $item->propiedad_id }}</td>
	                <td>{{ $item->entidad_federativa }}</td>
	                <td>{{ $item->municipio }}</td>
                    <td>{{ $item->localidad }}</td>
                    <td>{{ $item->folio_regpub }}</td>
	                <td>{{ $item->folio_catastral }}</td>
	                <td>{{ $item->superficie_terreno }}</td>
	                <td>{{ $item->valor_comercial }}</td>
	                <td>{{ $item->valor_catastral }}</td> 
	            </tr>
        	@endforeach
        </tbody>
    </table>
	
</body>
</html>