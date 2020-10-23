<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Propiedades</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .table-top{
            padding-top: 50px;
        }
    </style>
</head>
<body>
	<div>
        <div class="float-right">
            <img src="https://d500.epimg.net/cincodias/imagenes/2015/05/08/pyme/1431098283_691735_1431098420_noticia_normal.jpg" width="60px" height="60px">
        </div>
    </div>

    <div class="table-top"></div>

    <p>Propiedad</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Origen ID</th>
                <th scope="col">Tipo</th>
                <th scope="col">Granja</th>
                <th scope="col">Estatus</th>
                <th scope="col">Nombre corto</th>
                <th scope="col">Ultimo movimiento</th>
                <th scope="col">Fecha_alta</th> 
                <th scope="col">Propietario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $propiedad->propiedad_id }}</td>
                <td>{{ $propiedad->origen_id }}</td>
                <td>{{ $propiedad->tipo }}</td>
                <td>{{ $propiedad->granja }}</td>
                <td>{{ $propiedad->estatus }}</td>
                <td>{{ $propiedad->nombre_corto }}</td>
                <td>{{ $propiedad->ultimo_movimiento }}</td>
                <td>{{ $propiedad->fecha_alta }}</td>
                <td>{{ $propiedad->propietario }}</td> 
            </tr>
        </tbody>
    </table>

    <p class="mt-2">Datos Generales</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Entidad federativa</th>
                <th scope="col">Municipio</th>
                <th scope="col">Localidad</th>
                <th scope="col">Folio regpub</th>
                <th scope="col">Folio Catastral</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $dato->entidad_federativa }}</td>
                <td>{{ $dato->municipio }}</td>
                <td>{{ $dato->localidad }}</td>
                <td>{{ $dato->folio_regpub }}</td>
                <td>{{ $dato->folio_catastral }}</td>
            </tr>
        </tbody>
    </table>

    <p class="mt-2">Dimenciones</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Superficie Construccion</th>
                <th scope="col">Superficie Terreno</th>
                <th scope="col">Frente</th>
                <th scope="col">Fondo</th>
                <th scope="col">Capacidad granja</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $dimencion->superficie_construccion }}</td>
                <td>{{ $dimencion->superficie_terreno }}</td>
                <td>{{ $dimencion->frente }}</td>
                <td>{{ $dimencion->fondo }}</td>
                <td>{{ $dimencion->capacidad_granja }}</td>
            </tr>
        </tbody>
    </table>
	
    <br>
    <p class="mt-5">Valores</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Valor construccion</th>
                <th scope="col">Valor terreno</th>
                <th scope="col">Valor comercial</th>
                <th scope="col">Fecha valor comercial</th>
                <th scope="col">Valor catastral</th>
                <th scope="col">Fecha valorcatastral</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $valor->valor_construccion }}</td>
                <td>{{ $valor->valor_terreno }}</td>
                <td>{{ $valor->valor_comercial }}</td>
                <td>{{ $valor->fecha_valor_comercial }}</td>
                <td>{{ $valor->valor_catastral }}</td>
                <td>{{ $valor->fecha_valor_catastral }}</td>
            </tr>
        </tbody>
    </table>

    <p class="mt-2">Ubicacion</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Ejido</th>
                <th scope="col">Parcela</th>
                <th scope="col">Solar</th>
                <th scope="col">Tablaje</th>
                <th scope="col">Finca</th>
                <th scope="col">Direccion</th>
                <th scope="col">Colonia</th>
                <th scope="col">Manzana Ejido</th>
                <th scope="col">Manzana Urbana</th>
                <th scope="col">Lote</th>
                <th scope="col">Codigo_postal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $ubicacion->ejido }}</td>
                <td>{{ $ubicacion->parcela }}</td>
                <td>{{ $ubicacion->solar }}</td>
                <td>{{ $ubicacion->tablaje }}</td>
                <td>{{ $ubicacion->finca }}</td>
                <td>{{ $ubicacion->direccion }}</td>
                <td>{{ $ubicacion->colonia }}</td>
                <td>{{ $ubicacion->ejido_manzana }}</td>
                <td>{{ $ubicacion->urbana_manzana }}</td>
                <td>{{ $ubicacion->lote }}</td>
                <td>{{ $ubicacion->codigo_postal }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
