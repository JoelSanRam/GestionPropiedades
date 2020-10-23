@extends('MasterPage.admin')

@section('admin')

<!-- begin breadcrumb -->
@if (Auth::user()->rol == "Administrador")
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a><button class="btn btn-primary">Agregar nuevo predio</button></a></li>
</ol>
@endif
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
                        @foreach($data as $item)
                            <tr class="odd gradeX">
                                <td width="1%" class="f-s-600 text-inverse">{{ $item->propiedad_id }}</td>
                                <td>{{ $item->propietario }}</td>
                                <td>{{ $item->estatus }}</td>
                                <td>{{ $item->tipo }}</td>
                                <td>
                                    <p>Municipio: {{ $item->municipio }}</p> 
                                    <p>Localidad: {{ $item->localidad }}</p> 
                                </td>
                                <td>{{ $item->ultimo_movimiento }}</td>
                                <td>
                                    <a href="{{ route('pdf-individual', $item->propiedad_id) }}" class="btn btn-warning btn-icon btn-sm" title="Generar reporte">
                                        <i class="fas fa-file-pdf fa-fw"></i>
                                    </a>

                                    <a href="{{ route('detalles', $item->propiedad_id) }}" class="btn btn-success btn-icon btn-sm" title="Detalles">
                                        <i class="fas fa-eye fa-fw"></i>
                                    </a>

                                    @if (Auth::user()->rol == "Administrador")
                                        <button type="button" class="btn btn-grey btn-icon btn-sm" title="Editar" >
                                            <i class="fas fa-pencil-alt fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-icon btn-sm" title="Anexos">
                                            <i class="fas fa-edit fa-fw"></i>
                                        </button>

                                        <button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar">
                                            <i class="fas fa-trash-alt fa-fw"></i>
                                        </button>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
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
