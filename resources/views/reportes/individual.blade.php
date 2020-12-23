<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Propiedad</title>
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
            <img src="{{ asset('assets/img/logo/logo.png')}}" width="90px" height="40px">
        </div>
    </div>

    <div class="table-top"></div>

    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                <br>
                <h4>Datos Generales</h4>
                <table class="table table-bordered">
                    <thead class="thead" style="background-color: #1C4482; color: white">
                        <tr>
                            <th scope="col" width="20%">Campo</th>
                            <th scope="col">Valores</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{ $propiedad->id }}</td>
                        </tr>
                        <tr>
                            <td>ID origen</td>
                            <td>{{ $propiedad->origen_id }}</td>
                        </tr>
                        <tr>
                            <td>Tipo</td>
                            <td>{{ $propiedad->tipo }}</td>
                        </tr>
                        <tr>
                            <td>Granja</td>
                            <td>{{ $propiedad->granja }}</td>
                        </tr>
                        <tr>
                            <td>Estatus</td>
                            <td>{{ $propiedad->estatus }}</td>
                        </tr>
                        <tr>
                            <td>Nombre corto</td>
                            <td>{{ $propiedad->nombre_corto }}</td>
                        </tr>
                        {{--<tr>
                            <td>Último movimiento</td>
                            <td>{{ $propiedad->updated_at }}</td>
                        </tr>--}}
                        <tr>
                            <td>Fecha de alta</td>
                            <td>{{ $propiedad->created_at }}</td>
                        </tr>
                        <tr>
                            <td>Propietario</td>
                            <td>{{ $propiedad->propietario }}</td>
                        </tr>
                    </tbody>
                </table>
            </div> <br>
            <div class="col-md-6">
                <br>
                <h4>Datos Extras</h4>
                <table class="table table-bordered">
                    <thead class="thead" style="background-color: #1C4482; color: white">
                        <tr>
                            <th scope="col" width="20%">Campo</th>
                            <th scope="col">Valores</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Entidad federativa</td>
                            <td>{{ $propiedad->entidad_federativa }}</td>
                        </tr>
                        <tr>
                            <td>Municipio</td>
                            <td>{{ $propiedad->municipio }}</td>
                        </tr>
                        <tr>
                            <td>Localidad</td>
                            <td>{{ $propiedad->localidad }}</td>
                        </tr>
                        <tr>
                            <td>Folio reg. pub.</td>
                            <td>{{ $propiedad->folio_regpub }}</td>
                        </tr>
                        <tr>
                            <td>Folio catastral</td>
                            <td>{{ $propiedad->folio_catastral }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                <br><br>
                <h4>Dimensiones</h4>
                <table class="table table-bordered">
                    <thead class="thead" style="background-color: #1C4482; color: white">
                        <tr>
                            <th scope="col" width="20%">Campo</th>
                            <th scope="col">Valores</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Superficie Construcción</td>
                            <td>{{ $dimencion->superficie_construccion }} @if( $dimencion->superficie_construccion != "") mts<sup>2</sup>. @endif  </td>
                        </tr>
                        <tr>
                            <td>Superficie Terreno</td>
                            <td>{{ $dimencion->superficie_terreno }} @if($dimencion->superficie_terreno != "") mts<sup>2.</sup> @endif </td>
                        </tr>
                        <tr>
                            <td>Frente</td>
                            <td>{{ $dimencion->frente }} @if($dimencion->frente != "") mts.@endif </td>
                        </tr>
                        <tr>
                            <td>Fondo</td>
                            <td>{{ $dimencion->fondo }} @if($dimencion->fondo != "") mts. @endif</td>
                        </tr>
                        <tr>
                            <td>Granja</td>
                            <td>{{ $dimencion->capacidad_granja }}</td>
                        </tr>
                    </tbody>
                </table>
            </div> <br>
            <div class="col-md-6">
                <h4>Valores</h4>
                <table class="table table-bordered">
                    <thead class="thead" style="background-color: #1C4482; color: white">
                        <tr>
                            <th scope="col" width="20%">Campo</th>
                            <th scope="col">Valores</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Valor construcción</td>
                            <td>${{ number_format($valor->valor_construccion, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Valor comercial</td>
                            <td>${{ number_format($valor->valor_comercial, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Fecha valor comercial</td>
                            <td>{{ $valor->fecha_valor_comercial }}</td>
                        </tr>
                        <tr>
                            <td>Valor catastral</td>
                            <td>${{ number_format($valor->valor_catastral, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Fecha valorcatastral</td>
                            <td>{{ $valor->fecha_valor_catastral }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <br><br><br><br>

    <h4>Ubicacion</h4>
    <table class="table table-bordered">
        <thead class="thead" style="background-color: #1C4482; color: white">
            <tr>
                <th scope="col" width="20%">Campo</th>
                <th scope="col">Valores</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ejido</td>
                <td>{{ $ubicacion->ejido }}</td>
            </tr>
            <tr>
                <td>Ejido Parcela</td>
                <td>{{ $ubicacion->parcela }}</td>
            </tr>
            <tr>
                <td>Ejido Lote</td>
                <td>{{ $ubicacion->lote }}</td>
            </tr>
            <tr>
                <td>Solar</td>
                <td>{{ $ubicacion->solar }}</td>
            </tr>
            <tr>
                <td>Tablaje</td>
                <td>{{ $ubicacion->tablaje }}</td>
            </tr>
            <tr>
                <td>Finca</td>
                <td>{{ $ubicacion->finca }}</td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td>{{ $ubicacion->direccion }}</td>
            </tr>
            <tr>
                <td>Ejido Manzana</td>
                <td>{{ $ubicacion->ejido_manzana }}</td>
            </tr>
            <tr>
                <td>Código postal</td>
                <td>{{ $ubicacion->codigo_postal }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
