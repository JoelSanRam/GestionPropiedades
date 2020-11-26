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
                <h4 class="panel-title">Datos Extras</h4>
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

                <form action="{{ route('update-ubicacion', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID</label>
                            <input type="text" class="form-control m-b-5" value="{{ $item->id }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Ejido</label>
                            <input name="ejido" type="text" class="form-control m-b-5" placeholder="Ingresar ejido" value="{{ $item->ejido }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Parcela</label>
                            <input name="parcela" type="text" class="form-control m-b-5" placeholder="Ingresar parcela" value="{{ $item->parcela }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Solar</label>
                            <input name="solar" type="text" class="form-control m-b-5" placeholder="Ingresar solar" value="{{ $item->solar }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tablaje</label>
                            <input name="tablaje" type="text" class="form-control m-b-5" placeholder="Ingresar tablaje" value="{{ $item->tablaje }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Finca</label>
                            <input name="finca" type="text" class="form-control m-b-5" placeholder="Ingresar finca" value="{{ $item->finca }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Direccion</label>
                            <input name="direccion" type="text" class="form-control m-b-5" placeholder="Ingresar direccion" value="{{ $item->direccion }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Colonia</label>
                            <input name="colonia" type="text" class="form-control m-b-5" placeholder="Ingresar colonia" value="{{ $item->colonia }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Manzana de ejido</label>
                            <input name="ejido_manzana" type="text" class="form-control m-b-5" placeholder="Ingresar manzana de ejido" value="{{ $item->ejido_manzana }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Manzana urbana</label>
                            <input name="urbana_manzana" type="text" class="form-control m-b-5" placeholder="Ingresar manzana urbana" value="{{ $item->urbana_manzana }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Lote</label>
                            <input name="lote" type="text" class="form-control m-b-5" placeholder="Ingresar lote" value="{{ $item->lote }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Codigo postal</label>
                            <input name="codigo_postal" type="text" class="form-control m-b-5" placeholder="Ingresar codigo postal" value="{{ $item->codigo_postal }}">
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
