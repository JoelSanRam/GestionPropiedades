@extends('MasterPage.admin')

@section('admin')

<!-- begin page-header -->
<h1 class="page-header">Documentos Adjuntos</h1>
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
                <h4 class="panel-title">Listado de Archivos</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <table id="data-table-responsive" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="1%">ID</th>
                            <th class="text-nowrap">PDF</th>
                            <th class="text-nowrap">DWG</th>
                            @if (Auth::user()->rol == "Editar")
                                <th>Acciones</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($files as $item)
                            <tr class="odd gradeX">
                                <td width="1%" class="f-s-600 text-inverse">{{ $item->propiedad_id }}</td>
                                <td>
                                    @if ($item->pdf != ".pdf")
                                        {{ $item->pdf }}
                                    @else
                                        No hay documento registrado
                                    @endif
                                </td>
                                <td>
                                    @if ($item->dwg != ".dwg")
                                        {{ $item->dwg }}
                                    @else
                                        No hay documento registrado
                                    @endif
                                </td>
                                <td>
                                    @if (Auth::user()->rol == "Administrador")
                                        <a href="{{ route('doc-view-edit', $item->id) }}" class="btn btn-warning btn-icon btn-sm" title="Editar">
                                            <i class="fas fa-pen-square"></i>
                                        </a>
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



