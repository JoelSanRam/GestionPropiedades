@extends('MasterPage.admin')

@section('admin')

<!-- begin page-header -->
<h1 class="page-header">Cargar Excel</h1>
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
                    <div class="col-md-8 m-auto">
                        @if(Session::has('message'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>{!! Session::get('message') !!}</strong>
                            </div>
                        @endif
                    </div>

                    @if ( $errors->any() )
                        <div class="alert alert-danger">
                            @foreach( $errors->all() as $error )<strong>{{ $error }}</strong>@endforeach
                        </div>
                    @endif
                </div>


                <div class="row my-3">
                    <div class="col-md-8 m-auto">
                        <div class="alert alert-warning" role="alert">
                            Solo se permiten archivos excel
                        </div>
                        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" accept=".xlsx, .xlsm, .xlsb, .xltx, .xltm,.xls,.xlt,.xls,.xml,.xla,.xlw" onchange="alertSuccess()" id="registros" name="registros">
                                    <label class="custom-file-label" for="datos">Elige tu archivo</label>
                                </div>
                            </div>

                            <br>

                            <div class="alert alert-primary message d-none" role="alert">
                                Archivo Cargado con Exito
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>

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