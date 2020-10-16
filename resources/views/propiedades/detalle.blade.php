@extends('MasterPage.admin')

@section('admin')



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
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Tipo</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Origen</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Granja</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Estatus</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Nombre</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Ult. Mov.</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Fecha alta</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Observaciones</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
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
                    <h4 class="panel-title">Valores</h4>
                </div>
                <!-- begin table-responsive -->

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.535652378898!2d-89.69482248506766!3d21.011242786007898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5674b03906566b%3A0x7da2b1624b9b5263!2sCaucel%2C%2097300%20Caucel%2C%20Yuc.!5e0!3m2!1ses-419!2smx!4v1602874088589!5m2!1ses-419!2smx" width="522" height="323" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

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
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Terreno</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Frente</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Fondo</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Capacidad granja</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
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
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Valor de Terreno</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Valor comercial</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Valor catastral</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Fecha del valor</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
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
                                <td class="bg-silver-lighter">Dirección</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Colonia</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Ejido Mza.</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Urbana Mza.</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Lote</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Código postal</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Propietario</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
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
                    <h4 class="panel-title">Datos</h4>
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
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Municipio</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Localidad</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Registro público</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Folio catastral</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <!-- end panel -->
        </div>



        <!-- PDF -->
        <div class="col-lg-5 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-4">
                <div class="panel-heading ui-sortable-handle">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">PDF's</h4>
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
                                <td class="bg-silver-lighter">Dirección</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
                            </tr>
                            <tr>
                                <td class="bg-silver-lighter">Colonia</td>
                                <td><a href="javascript:;" id="username" data-type="text" data-pk="1" data-title="Enter Username" class="editable editable-click">superuser </a></td>
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
        <div class="col-md-5"></div>
        <div class="col-md-5">
            <p><a href="javascript:;" class="btn btn-secondary btn-lg" style="margin-left: 20px">Regresar</a> </p>
        </div>

    </div>

@endsection
