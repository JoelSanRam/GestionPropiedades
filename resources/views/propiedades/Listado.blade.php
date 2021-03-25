@extends('MasterPage.admin')

@section('admin')

<div class="row mb-3">
    <div class="col-lg-10">
        <h1 class="page-header">Listado de predios</h1>
    </div>
    <div class="col-lg-2">
        @if (Auth::user()->rol == "Administrador")
            <a href="{{ route('create') }}" class="btn text-light float-right" style="background: #1C4482;">Agregar nuevo predio</a>
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
                            <th class="text-nowrap">ID</th>
                            <th class="text-nowrap">Tablaje</th>
                            <th class="text-nowrap">Solar</th>
                            <th class="text-nowrap">Finca</th>
                            <th class="text-nowrap">Parcela</th>
                            <th class="text-nowrap">Propietario</th>
                            <th class="text-nowrap">Tipo</th>
                            <th class="text-nowrap">Ubicación</th>
                            <th class="text-nowrap">Dirección</th>
                            <th class="text-nowrap">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr class="odd gradeX">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->tablaje }}</td>
                                <td>{{ $item->solar }}</td>
                                <td>{{ $item->finca }}</td>
                                <td>{{ $item->parcela }}</td>
                                <td>{{ $item->propietario }}</td>
                                <td>{{ $item->tipo }}</td>
                                <td>
                                    <p>Municipio: {{ $item->municipio }}</p>
                                    <p>Localidad: {{ $item->localidad }}</p>
                                </td>
                                <td>{{ $item->direccion }}</td>
                                <td>
                                    <a href="{{ route('pdf-individual', $item->id) }}" class="btn text-light btn-icon btn-sm" style="background: #ffc800;" title="Generar reporte">
                                        <i class="fas fa-file-pdf fa-fw"></i>
                                    </a>
                                    <a href="{{ route('detalles', $item->id) }}" class="btn btn-success btn-icon btn-sm" title="Detalles">
                                        <i class="fas fa-eye fa-fw"></i>
                                    </a>
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
<div class="copyright">
    <p>© 2021 Desarrollado por <a href="https://www.buho-solutions.com">Buho solutions</a></p>
</div>
@endsection



