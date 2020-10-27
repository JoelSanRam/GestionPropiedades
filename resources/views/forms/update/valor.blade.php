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
                <h4 class="panel-title">Valores</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <form action="{{ route('update-valor', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID</label>
                            <input type="text" class="form-control m-b-5" value="{{ $item->propiedad_id }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Valor de construccion</label>
                            <input name="valor_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar valor de construccion" value="{{ $item->valor_construccion }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Valor de terreno</label>
                            <input name="valor_terreno" type="text" class="form-control m-b-5" placeholder="Ingresar valor del terreno" value="{{ $item->valor_terreno }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Valor comercial</label>
                            <input name="valor_comercial" type="text" class="form-control m-b-5" placeholder="Ingresar valor comercial" value="{{ $item->valor_comercial }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Fecha de valor comercial</label>
                            <input name="fecha_valor_comercial" type="date" class="form-control m-b-5" value="{{ $item->fecha_valor_comercial }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Valor catastral</label>
                            <input name="valor_catastral" type="text" class="form-control m-b-5" placeholder="Ingresar valor catastral" value="{{ $item->valor_catastral }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Fecha de valor catastral</label>
                            <input name="fecha_valor_catastral" type="date" class="form-control m-b-5" value="{{ $item->fecha_valor_catastral }}">
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
