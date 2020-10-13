@extends('MasterPage.admin')

@section('admin')

<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a><button class="btn btn-primary">Agregar nuevo usuario</button></a></li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Listado de Usuarios </h1>
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
                <h4 class="panel-title">Listado de usurios</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <table id="data-table-responsive" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="1%">ID</th>
                            <th class="text-nowrap">Nombre</th>
                            <th width="15%" class="text-nowrap">Usuario</th>
                            <th width="15%" class="text-nowrap">Tipo de usuario</th>
                            <th class="text-nowrap">Contraseña</th>
                            <th width="10%">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">1</td>
                            <td >Joel Sánchez Ramírez</td>
                            <td>Joel</td>
                            <td>Administrador</td>
                            <td> <p>Contrasenia</td>
                            <td> <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar"><i class="fas fa-pencil-alt fa-fw"></i></button>
                                

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
