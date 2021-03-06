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
                <h4 class="panel-title">Datos Generales</h4>
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

                    @if(count($errors) > 0)
                        <div class="col-md-8 m-auto">
                            <div class="alert alert-danger">
                                <h6>
                                    Ocurrio un error al subir los registros. Algunos de los siguientes mensajes pueden ser los posibles errores:
                                </h6>
                                <br>
                                @foreach($errors as $error )
                                    <strong>{{ $error }}</strong>
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

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
                                @if($item->marcador != null || $item->marcador != '')
                                    <div class="form-group col-md-3">
                                        <span class="badge badge-primary">Marcador</span>
                                        <a href="{{ route('delete-coordenada', $item->id) }}" class="btn btn-danger btn-sm">
                                            Borrar
                                        </a>
                                    </div>
                                @else
                                    <div class="col-md-3">
                                        <a href="{{ route('update-view-marcador', $item->id) }}" class="btn btn-warning btn-sm">
                                            Establecer
                                        </a>
                                        <a href="{{ route('delete-coordenada', $item->id) }}" class="btn btn-danger btn-sm">
                                            Borrar
                                        </a>
                                    </div>
                                @endif

                            </div>
                        @endforeach


                        <div class="form-row justify-content-end">
                            <a href="{{ route('detalles', $id) }}" class="btn btn-secondary btn-lg mr-2">Volver a detalles</a>
                            <button type="submit" class="btn btn-primary btn-lg">Guardar Cambios</button>
                        </div>
                    </form>
                @else
                    <form action="{{ route('update-excel-coordenada') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <label>ID Propiedad</label>
                                <input type="text" class="form-control m-b-5" value="{{ $id }}" readonly>
                            </div>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="col-md-6">
                                <div class="input-group my-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" accept=".xlsx, .xlsm, .xlsb, .xltx, .xltm,.xls,.xlt,.xls,.xml,.xla,.xlw" onchange="alertSuccess()" id="coordenadas" name="coordenadas" required>
                                        <label class="custom-file-label" for="coordenadas">Elige tu archivo</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-row justify-content-center">
                            <div class="col-md-6">
                                <div class="alert alert-primary message d-none" role="alert">
                                    Archivo Cargado
                                </div>
                            </div>
                        </div>

                        <div class="form-row justify-content-end">
                            <a href="{{ route('detalles', $id) }}" class="btn btn-secondary btn-lg mr-2">Volver a detalles</a>
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

<script>
    function alertSuccess() {
        var file = document.querySelector('input[type=file]').files[0];

        if (file) {
            $(".message").removeClass("d-none");
        }
    }

</script>

@endsection
