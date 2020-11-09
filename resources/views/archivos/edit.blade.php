@extends('MasterPage.admin')

@section('admin')

<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">

</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Actualizacion del Documento Adjunto</h1>
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
                <h4 class="panel-title">Archivos</h4>
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

                <form action="{{ route('doc-update', $file->id) }}" method="POST" class="form-control-with-bg">
                    @csrf
                    @method('PUT')

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>ID</label>
                                <input type="text" class="form-control" value="{{ $file->propiedad_id }}" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label>PDF</label>
                                <input name="pdf" type="text" class="form-control" placeholder="Ingresar nombre del pdf" value="{{ $file->pdf }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label>DWG</label>
                                <input name="dwg" type="text" class="form-control" placeholder="Ingresar nombre del dwg" value="{{ $file->dwg }}" >
                            </div>
                        </div>

                        <div class="form-row justify-content-end">
                            <a href="{{ route('files') }}" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
                            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
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