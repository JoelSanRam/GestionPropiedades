@extends('MasterPage.admin')

@section('admin')

<div class="row mb-3">
    <div class="col-lg-10">
        <h1 class="page-header">Listado de predios</h1>
    </div>
    <div class="col-lg-2">
        @if (Auth::user()->rol == "Administrador")
            <a href="{{ route('create') }}" class="btn text-light" style="background: #ffc800;">Agregar nuevo predio</a>
        @endif
    </div>
</div>

<!-- begin row -->
<div class="row">
    <!-- begin col-10 -->
    <div class="col-lg-12">
        <!-- begin panel -->
        <div class="panel panel-inverse">
            <!-- begin panel-heading -->
            <div class="panel-heading">
                <div class="panel-heading-btn">

                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

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
                            <th class="text-nowrap">Status</th>
                            <th class="text-nowrap">Tipo</th>
                            <th class="text-nowrap">Ubicación</th>
                            {{-- <th class="text-nowrap">Ult. mov.</th> --}}
                            <th>Acciones</th>
                            @if (Auth::user()->rol == "Administrador")
                            <th>Opciones para Editar</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr class="odd gradeX">
                                <td width="1%" class="f-s-600 text-inverse">{{ $item->id }}</td>
                                <td>{{ $item->propietario }}</td>
                                <td>{{ $item->estatus }}</td>
                                <td>{{ $item->tipo }}</td>
                                <td>
                                    <p>Municipio: {{ $item->municipio }}</p>
                                    <p>Localidad: {{ $item->localidad }}</p>
                                </td>
                                <td>
                                    <a href="{{ route('pdf-individual', $item->id) }}" class="btn text-light btn-icon btn-sm" style="background: #ffc800;" title="Generar reporte">
                                        <i class="fas fa-file-pdf fa-fw"></i>
                                    </a>

                                    <a href="{{ route('detalles', $item->id) }}" class="btn btn-success btn-icon btn-sm" title="Detalles">
                                        <i class="fas fa-eye fa-fw"></i>
                                    </a>

                                    @if (Auth::user()->rol == "Administrador")

                                        {{-- <button type="button" class="btn btn-danger btn-icon btn-sm" title="Eliminar">
                                            <i class="fas fa-trash-alt fa-fw"></i>
                                        </button> --}}
                                    @endif

                                </td>
                                @if (Auth::user()->rol == "Administrador")
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info">Elegir</a>
                                            <a href="#" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown"></a>
                                            <ul class="dropdown-menu pull-right">
                                                <a href="{{ route('update-view-propiedad', $item->id) }}" class="dropdown-item">Datos Generales</a>
                                                <a href="{{ route('update-view-dimencion', $item->id) }}" class="dropdown-item">Dimensiones</a>
                                                <a href="{{ route('update-view-ubicacion', $item->id) }}" class="dropdown-item">Ubicacion</a>
                                                <a href="{{ route('update-view-valor', $item->id) }}" class="dropdown-item">Valores</a>
                                                <a href="{{ route('update-view-coordenada', $item->id) }}" class="dropdown-item">Coordenadas</a>
                                                <a href="{{ route('update-view-archivo', $item->id) }}" class="dropdown-item">Archivos</a>
                                                <a href="{{ route('update-view-image', $item->id) }}" class="dropdown-item">Imagenes</a>
                                            </ul>
                                        </div>
                                    </td>
                                @endif
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
<div class="copyright">
    <p>© 2021 Desarrollado por <a href="https://www.buho-solutions.com">Buho solutions</a></p>
</div>
@endsection



