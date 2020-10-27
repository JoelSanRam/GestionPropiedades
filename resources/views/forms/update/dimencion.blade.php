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
                <h4 class="panel-title">Dimenciones</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <form action="{{ route('update-dimencion', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID</label>s
                            <input type="text" class="form-control m-b-5" value="{{ $item->propiedad_id }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Superficie de Construccion</label>
                            <input name="superficie_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar superficie de construccion" value="{{ $item->superficie_construccion }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Superficie de terreno</label>
                            <input name="superficie_terreno" type="text" class="form-control m-b-5" placeholder="Ingresar superficie del terreno" value="{{ $item->superficie_terreno }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Frente</label>
                            <input name="frente" type="text" class="form-control m-b-5" placeholder="Ingresar frente" value="{{ $item->frente }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Fondo</label>
                            <input name="fondo" type="text" class="form-control m-b-5" placeholder="Ingresar fondo" value="{{ $item->fondo }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Capacidad granja</label>
                            <input name="capacidad_granja" type="text" class="form-control m-b-5" placeholder="Ingresar capacidad granja" value="{{ $item->capacidad_granja }}">
                        </div>
                    </div>

                    <div class="form-row justify-content-end">
                        <a href="/listado" class="btn btn-secondary btn-lg mr-2">Regresar</a>
                        <button type="submit" class="btn btn-primary btn-lg">Guardar Cambios</button>
                    </div>
                </form>

            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->
@endsection
