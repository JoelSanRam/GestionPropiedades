@extends('MasterPage.admin')

@section('admin')

<!-- begin page-header -->
<h1 class="page-header">Subir Archivos</h1>
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
                        <form action="{{ route('file-upload-files') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Archivos PDF</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" onchange="alertSuccessPDF()" name="pdfs[]" id="pdfs" lang="es" multiple="multiple">
                                    <label class="custom-file-label">Seleccionar Archivos</label>
                                </div>
                            </div>

                            <div class="alert alert-primary message-pdfs d-none" role="alert">
                                <p>Archivos Cargados: <span class="count-pdfs"></span></p>
                            </div>

                            <div class="form-group">
                                <label>Archivos DWG</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" onchange="alertSuccessDWG()" name="dwgs[]" id="dwgs" lang="es" multiple="multiple">
                                    <label class="custom-file-label" >Seleccionar Archivos</label>
                                </div>
                            </div>

                            <div class="alert alert-primary message-dwgs d-none" role="alert">
                                 <p>Archivos Cargados: <span class="count-dwgs"></span></p>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Subir</button>
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
    function alertSuccessPDF() {
        var items_pdfs = document.getElementById('pdfs');

        if (items_pdfs) {
            var count_pdfs = items_pdfs.files.length;
            $(".count-pdfs").html(count_pdfs);
            $(".message-pdfs").removeClass("d-none");
        }
    }

    function alertSuccessDWG() {
        var items_dwgs = document.getElementById('dwgs');

        if (items_dwgs) {
            var count_dwgs = items_dwgs.files.length;
            $(".count-dwgs").html(count_dwgs);
            $(".message-dwgs").removeClass("d-none");
        }
    }
    
</script>

@endsection