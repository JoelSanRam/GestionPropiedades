@extends('MasterPage.admin')

@section('admin')


    <ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a href="{{ route('pdf-individual', $propiedad->id) }}" class="btn btn-primary">Generar PDF</a></li>
    </ol>

    <!-- begin page-header -->
    <h1 class="page-header">Detalle de propiedad </h1>

    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-8 -->
        <!-- Generales -->
        <div class="col-lg-6 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading ui-sortable-handle">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Datos generales</h4>
                </div>
                <!-- begin table-responsive -->
                <div class="table-responsive">
                    <table id="user" class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th width="20%">Campo</th>
                                <th>Valores</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-silver-lighter">ID</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->id }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">ID Origen</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->origen_id }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Tipo</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->tipo }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Granja</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->granja }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Estatus</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->estatus }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Nombre</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->nombre_corto }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Propietario</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->propietario }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Observaciones</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->observaciones }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Fecha alta</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->created_at }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Ult. Mov</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->updated_at }}</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <!-- end panel -->
        </div>
        <!-- Mapa -->
        <div class="col-lg-6 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse" >
                <div class="panel-heading ui-sortable-handle">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Mapa</h4>
                </div>
                <!-- begin table-responsive -->

                <div class="detalles-map" id="map"></div>

                <!-- end table-responsive -->
            </div>
            <!-- end panel -->
        </div>

        <!-- end col-8 -->

    </div>
    <div class="row">
        <!-- begin col-8 -->

        <!-- dimensiones -->
        <div class="col-lg-6 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading ui-sortable-handle">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Dimensiones</h4>
                </div>
                <!-- begin table-responsive -->
                <div class="table-responsive">
                    <table id="user" class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th width="20%">Campo</th>
                                <th>Valor</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-silver-lighter">Construcción</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $dimencion->superficie_construccion }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Terreno</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $dimencion->superficie_terreno }} m<sup>2</sup></a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Frente</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $dimencion->frente }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Fondo</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $dimencion->fondo }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Capacidad granja</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $dimencion->capacidad_granja }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Fecha alta</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $dimencion->created_at }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Ult. Mov</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $dimencion->updated_at }}</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <!-- end panel -->
        </div>

        <!-- Datos -->
        <div class="col-lg-6 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading ui-sortable-handle">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Datos Extras</h4>
                </div>
                <!-- begin table-responsive -->
                <div class="table-responsive">
                    <table id="user" class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th width="25%">Campo</th>
                                <th>Valor</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-silver-lighter">Entidad federativa</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->entidad_federativa }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Municipio</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->municipio }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Localidad</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->localidad }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Registro público</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->folio_regpub }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Folio catastral</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->folio_catastral }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Fecha alta</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->created_at }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Ult. Mov</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $propiedad->updated_at }}</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <!-- end panel -->
        </div>
        
    </div>
    <div class="row">
        <!-- end col-8 -->

        <!-- ubicación -->
        <div class="col-lg-6 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading ui-sortable-handle">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Ubicación</h4>
                </div>
                <!-- begin table-responsive -->
                <div class="table-responsive">
                    <table id="user" class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th width="20%">Nombre</th>
                                <th>Valor</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-silver-lighter">Ejido</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $ubicacion->ejido }}</a></td>
                            </tr>
                             <tr>
                                <td class="bg-silver-lighter">Ejido Parcela</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $ubicacion->parcela }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Ejido Lote</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $ubicacion->lote }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Solar</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $ubicacion->solar }}</a></td>
                            </tr>

                            <tr>
                                <td class="bg-silver-lighter">Tablaje</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $ubicacion->tablaje }}</a></td>
                            </tr>

                            <tr>
                                <td class="bg-silver-lighter">Finca</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $ubicacion->finca }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Dirección</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $ubicacion->direccion }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Ejido Manzana</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $ubicacion->colonia }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Código postal</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $ubicacion->codigo_postal }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Fecha alta</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $ubicacion->created_at }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Ult. Mov</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $ubicacion->updated_at }}</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <!-- end panel -->
        </div>

         <!-- Valores -->
        <div class="col-lg-6 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading ui-sortable-handle">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Valores</h4>
                </div>
                <!-- begin table-responsive -->
                <div class="table-responsive">
                    <table id="user" class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th width="25%">Campo</th>
                                <th>Valor</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="bg-silver-lighter">Valor de Construcción</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">${{ number_format($valor->valor_construccion, 2) }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Valor comercial</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">${{ number_format($valor->valor_comercial, 2) }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Fecha del valor comercial</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $valor->fecha_valor_comercial }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Valor catastral</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">${{ number_format($valor->valor_catastral, 2) }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Fecha del valor catastral</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $valor->fecha_valor_catastral }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Fecha alta</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $valor->created_at }}</a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Ult. Mov</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $valor->updated_at }}</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <!-- end panel -->
        </div>

    </div>
    <!-- end row -->

    <div class="row">

        <div class="col-lg-6 ui-sortable">
            @if(Session::has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{!! Session::get('message') !!}</strong>
                </div>
            @endif
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading ui-sortable-handle">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Documentos Adjuntos</h4>
                </div>
                <!-- begin table-responsive -->
                <div class="table-responsive">
                    <table id="user" class="table table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th>PDF</th>
                                <th>DWG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    @if(!empty($archivo))
                                        @if($archivo->pdf != null && $archivo->pdf != "")
                                            <a href="{{ route('doc-pdf', $archivo->id ) }}" class="btn btn-green">Descargar Archivo</a>
                                        @else
                                            No hay documento pdf
                                        @endif
                                    @else
                                        No hay documento pdf
                                    @endif
                                    
                                </td>
                                <td>
                                    @if(!empty($archivo))
                                        @if($archivo->dwg != null && $archivo->dwg != "")
                                            <a href="{{ route('doc-dwg', $archivo->id ) }}" class="btn btn-green">Descargar Archivo</a>
                                        @else
                                            No hay documento dwg
                                        @endif

                                    @else
                                        No hay documento dwg
                                    @endif
                                </td>
                            </tr>
                                @if(!empty($archivo->created_at)){{-- valida si contiene informacion --}}
                                <tr>
                                <td class="bg-silver-lighter">Fecha alta</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $archivo->created_at }}</a></td>
                                </tr>
                                @endif
                           
                            
                                @if (!empty($archivo->updated_at))
                                <tr>
                                <td class="bg-silver-lighter">Ult. Mov</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">{{ $archivo->updated_at }}</a></td>
                                </tr>
                                @endif
                           
                                
                            
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <!-- end panel -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-5">
            <p><a href="{{ route('listado') }}" class="btn btn-secondary btn-lg" style="margin-left: 20px">Regresar</a></p>
        </div>

    </div>



<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzlAU7AYsNOTbWNsuvgXhyIPSl07JSJ_g&callback=initMap&libraries=&v=weekly"defer></script>

<script>

    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 6,
            center: { lat: 19.6930200, lng: -89.0503700 },
        });

        // print polygon.
        const polygon = new google.maps.Polygon({
          paths: @json($polygon),
          strokeColor: "#FF0000",
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: "#FF0000",
          fillOpacity: 0.35,
        });

        polygon.setMap(map);


        ///// print markers ////
        const image = {
            url: "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
            size: new google.maps.Size(20, 32),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(0, 32),
        };
        const marker = new google.maps.Marker({
          position: @json($marker),
          map,
          icon: image,
        });

    }
</script>

@endsection
