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
                <form action="{{ route('update-dato', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID</label>
                            <input type="text" class="form-control m-b-5" value="{{ $item->propiedad_id }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Entidad federativa</label>
                            <input name="entidad_federativa" type="text" class="form-control m-b-5" placeholder="Ingresar entidad federativa" value="{{ $item->entidad_federativa }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Municipio</label>
                            <input name="municipio" type="text" class="form-control m-b-5" placeholder="Ingresar municipio" value="{{ $item->municipio }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Localidad</label>
                            <input name="localidad" type="text" class="form-control m-b-5" placeholder="Ingresar localidad" value="{{ $item->localidad }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Folio Reg. Pub</label>
                            <input name="folio_regpub" type="text" class="form-control m-b-5" placeholder="Ingresar folio" value="{{ $item->folio_regpub }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Folio catastral</label>
                            <input name="folio_catastral" type="text" class="form-control m-b-5" placeholder="Ingresar folio catastral" value="{{ $item->folio_catastral }}">
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
