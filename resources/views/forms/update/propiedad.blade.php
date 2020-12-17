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

                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                </div>
                <h4 class="panel-title">Propiedad</h4>
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

                <form action="{{ route('update-propiedad', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID</label>
                            <input type="text" class="form-control m-b-5" value="{{ $item->id }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>ID de origen</label>
                            <input name="origen_id" type="text" class="form-control m-b-5" placeholder="Ingresar id de origen" value="{{ $item->origen_id }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tipo</label>
                            <input name="tipo" type="text" class="form-control m-b-5" placeholder="Ingresar tipo" value="{{ $item->tipo }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Granja</label>
                            <select name="granja" class="form-control m-b-5" required>
                                <option>{{ $item->granja }}</option>
                                <option value="">Selecionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Estatus</label>
                            <input name="estatus" type="text" class="form-control m-b-5" placeholder="Ingresar estatus" value="{{ $item->estatus }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nombre corto</label>
                            <input name="nombre_corto" type="text" class="form-control m-b-5" placeholder="Ingresar nombre corto" value="{{ $item->nombre_corto }}" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Observaciones</label>
                            <input name="observaciones" type="text" class="form-control m-b-5" placeholder="Ingresar observaciones" value="{{ $item->observaciones }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Propietario</label>
                            <input name="propietario" type="text" class="form-control m-b-5" placeholder="Ingresar propietario" value="{{ $item->propietario }}" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Municipio</label>
                            <input name="municipio" type="text" class="form-control m-b-5" placeholder="Ingresar municipio" value="{{ $item->municipio }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Localidad</label>
                            <input name="localidad" type="text" class="form-control m-b-5" placeholder="Ingresar localidad" value="{{ $item->localidad }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Entidad federativa</label>
                            <input name="entidad_federativa" type="text" class="form-control m-b-5" placeholder="Ingresar entidad federativa" value="{{ $item->entidad_federativa }}" required>
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
