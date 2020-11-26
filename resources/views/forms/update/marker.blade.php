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
                <h4 class="panel-title">Marcador</h4>
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
                    <form action="{{ route('update-marker', $item->id) }}" method="POST" class="form-control-with-bg">
                        @csrf
                        @method('PUT')

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>ID</label>
                                    <input type="text" class="form-control" value="{{ $item->propiedad_id }}" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Latitud</label>
                                    <input name="lat" type="text" class="form-control" placeholder="Ingresar latitud" value="{{ $item->lat }}" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Longitud</label>
                                    <input name="lon" type="text" class="form-control" placeholder="Ingresar longitud" value="{{ $item->lng }}" required>
                                </div>
                            </div>

                            <div class="form-row justify-content-end">
                                <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
                                <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                            </div>
                    </form>
                @else
                    
                    <form action="{{ route('create-marker') }}" method="POST">
                        @csrf
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>ID Propiedad</label>
                                <input name="propiedad_id" type="text" class="form-control m-b-5" value="{{ $id }}" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Latitud</label>
                                <input name="lat" type="text" class="form-control" placeholder="Ingresar latitud" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Longitud</label>
                                <input name="lon" type="text" class="form-control" placeholder="Ingresar longitud" required>
                            </div>
                        </div>

                        <div class="form-row justify-content-end">
                            <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
                            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                        </div>

                    </form>

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