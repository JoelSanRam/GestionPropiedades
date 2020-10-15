@extends('MasterPage.admin')

@section('admin')

<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a><button class="btn btn-primary">Agregar nuevo predio</button></a></li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Listado de predios</h1>
<!-- end page-header -->

<!-- begin row -->
<div class="row">
    <!-- begin col-10 -->
    <div class="col-lg-12">
        <!-- begin panel -->
        <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">Listado de predios</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <table id="data-table-responsive" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="1%">ID</th>
                            <th class="text-nowrap">Propietario</th>
                            <th width="15%" class="text-nowrap">Status</th>
                            <th width="15%" class="text-nowrap">Tipo</th>
                            <th class="text-nowrap">Ubicación</th>
                            <th width="20%" class="text-nowrap">Ult. mov.</th>
                            <th width="10%">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">1</td>
                            <td >Joel Sánchez Ramírez</td>
                            <td>Vigente</td>
                            <td>Predio Urbano</td>
                            <td> <p>Dirección: calle 19 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                            <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
                            <td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
                                <button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

                                <button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">1</td>
                            <td >Joel Sánchez Ramírez</td>
                            <td>Vigente</td>
                            <td>Predio Urbano</td>
                            <td> <p>Dirección: calle 21 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                            <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
                            <td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
                                <button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

                                <button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">1</td>
                            <td >Joel Sánchez Ramírez</td>
                            <td>Vigente</td>
                            <td>Predio Urbano</td>
                            <td> <p>Dirección: calle 23 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                            <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
                            <td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
                                <button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

                                <button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">1</td>
                            <td >Joel Sánchez Ramírez</td>
                            <td>Vigente</td>
                            <td>Predio Urbano</td>
                            <td> <p>Dirección: calle 25 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                            <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
                            <td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
                                <button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

                                <button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">1</td>
                            <td >Joel Sánchez Ramírez</td>
                            <td>Vigente</td>
                            <td>Predio Urbano</td>
                            <td> <p>Dirección: calle 27 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                            <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
                            <td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
                                <button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

                                <button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">1</td>
                            <td >Joel Sánchez Ramírez</td>
                            <td>Vigente</td>
                            <td>Predio Urbano</td>
                            <td> <p>Dirección: calle 29 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                            <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
                            <td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
                                <button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

                                <button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">1</td>
                            <td >Joel Sánchez Ramírez</td>
                            <td>Vigente</td>
                            <td>Predio Urbano</td>
                            <td> <p>Dirección: calle 31 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                            <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
                            <td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
                                <button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

                                <button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
                        </tr>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">1</td>
                            <td >Joel Sánchez Ramírez</td>
                            <td>Vigente</td>
                            <td>Predio Urbano</td>
                            <td> <p>Dirección: calle 33 x 20 y 22</p> <p>Localidad: Almendros</p> <p>Municipio: Mérida</p> </td>
                            <td>Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral Cambio de precio catastral</td>
                            <td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
                                <button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos"><i class="fas fa-edit fa-fw"></i></i></button>

                                <button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar"><i class="fas fa-trash-alt fa-fw"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->
@endsection
