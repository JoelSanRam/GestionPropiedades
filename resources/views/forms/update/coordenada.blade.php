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
                <h4 class="panel-title">Datos Generales</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">

                <a href="{{ route('create-view-coordenada') }}" class="btn btn-primary my-3">Agregar Coordenadas</a>

                @if(isset($data) && count($data) > 0)
                    <form action="{{ route('update-coordenada') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>ID</label>
                                <input name="propiedad_id" type="text" class="form-control" value="{{ $data[0]['propiedad_id'] }}" readonly>
                            </div>
                        </div>

                        @foreach($data as $item)
                            <div class="form-row mb-2">
                                <input name="id[]" type="hidden" value="{{ $item->id }}" >
                                <div class="form-group col-md-3">
                                    <input name="lat[]" type="text" value="{{ $item->lat }}" class="form-control" placeholder="Ingresar latitud" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <input name="lon[]" type="text" value="{{ $item->lng }}" class="form-control" placeholder="Ingresar longitud" required>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{ route('delete-coordenada', $item->id) }}" class="btn btn-danger btn-sm">Borrar</a>
                                </div>
                            </div>
                        @endforeach
                        

                        <div class="form-row justify-content-end">
                            <a href="/listado" class="btn btn-secondary btn-lg mr-2">Regresar</a>
                            <button type="submit" class="btn btn-primary btn-lg">Guardar Cambios</button>
                        </div>
                    </form>
                @else
                    <h6>No hay coordenadas registradas</h6>
                @endif
                

            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->
@endsection
