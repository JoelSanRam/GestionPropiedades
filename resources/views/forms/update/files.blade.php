@extends('MasterPage.admin')

@section('admin')

<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">

</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Actualizacion del predio</h1>
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
                <h4 class="panel-title">Datos del Archivo</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6 my-3 mx-auto">
                        @if(Session::has('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{!! Session::get('message') !!}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                @if(!empty($item))

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            @if($item->pdf != ".pdf")
                                <a href="{{route('delete-pdf', $item->id)}}" class="btn btn-danger">Eliminar PDF</a>
                            @endif

                            @if($item->dwg != ".dwg")
                            <a href="{{route('delete-dwg', $item->id)}}" class="btn btn-warning">Eliminar DWG</a>

                            @endif
                            <a href="{{route('file-view-files')}}" class="btn btn-info">Cargar Archivos</a>
                        </div>
                    </div>

                    <form action="{{ route('update-archivo', $item->id) }}" method="POST" class="form-control-with-bg">
                        @csrf
                        @method('PUT')

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>ID</label>
                                    <input name="propiedad_id" type="text" class="form-control" value="{{ $item->propiedad_id }}" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Nombre del PDF</label>
                                    <input name="pdf" id="pdf" type="text" class="form-control" placeholder="Ingresar nombre del pdf" value="{{ $item->pdf }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Nombre del DWG</label>
                                    <input name="dwg" id="dwg" type="text" class="form-control" placeholder="Ingresar nombre del dwg" value="{{ $item->dwg }}">
                                </div>
                            </div>

                            <div class="form-row justify-content-end">
                                <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
                                <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                            </div>
                    </form>
                @else
                    <a href="{{ route('create-view-archivo') }}" class="btn btn-primary my-3">Cragar Archivos</a>
                    <h6>No hay archivos cargados</h6>
                @endif

            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
    
    $(function () {
        $('#pdf')
        .popover(
            { title: 'Alerta', content: "No olvide poner la extencion del archivo ejemplo: archivo.pdf", placement: "top" }
        );

        $('#dwg')
        .popover(
            { title: 'Alerta', content: "No olvide poner la extencion del archivo ejemplo: archivo.dwg", placement: "top" }
        )
    })

</script>

@endsection