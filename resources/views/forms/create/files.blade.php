@extends('MasterPage.admin')

@section('admin')

<h1 class="page-header">Crear Predio</h1>

<div id="wizard">
    <ul>
        <li class="col-md-3 col-sm-4 col-6 ">
            <a>
                <span class="number">1</span> 
                <span class="info text-ellipsis">
                    Datos Generales
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6 ">
            <a>
                <span class="number">2</span>
                <span class="info text-ellipsis">
                    Ubicacion
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a>
                <span class="number">3</span>
                <span class="info text-ellipsis">
                    Dimensiones
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6 ">
            <a>
                <span class="number">4</span>
                <span class="info text-ellipsis">
                    Valores
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a>
                <span class="number">5</span>
                <span class="info text-ellipsis">
                    Coordenadas
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6 ">
            <a>
                <span class="number">6</span>
                <span class="info text-ellipsis">
                    Marcador
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6 active">
            <a>
                <span class="number">7</span>
                <span class="info text-ellipsis">
                    Documentos Adjuntos
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a>
                <span class="number">8</span> 
                <span class="info text-ellipsis">
                    Registro Completado
                </span>
            </a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="col-md-6 mt-3 mx-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-md-6 mt-3 mx-auto">
        @if(Session::has('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{!! Session::get('message') !!}</strong>
            </div>
        @endif
    </div>
</div>

<form action="{{ route('create-archivo-files') }}" method="POST" enctype="multipart/form-data" class="form-control-with-bg">
    @csrf
    <div class="jumbotron my-5 py-3">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Archivo PDF</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" onchange="alertSuccessSinglePDF()" name="pdf" id="pdf" lang="es">
                    <label class="custom-file-label">Seleccionar Archivo</label>
                </div>
                <div class="alert alert-primary message-pdf d-none my-2" role="alert">
                    Archivo Cargado
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Archivo DWG</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" onchange="alertSuccessSingleDWG()" name="dwg" id="dwg" lang="es">
                    <label class="custom-file-label">Seleccionar Archivo</label>
                </div>
                <div class="alert alert-primary message-dwg d-none my-2" role="alert">
                    Archivo Cargado
                </div>
            </div>
        </div>

        <div class="form-row justify-content-end">
            <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
        </div>
        
    </div>
</form>

<script>
    function alertSuccessSinglePDF() {
        var item_pdf = document.getElementById('pdf');

        if (item_pdf) {
            $(".message-pdf").removeClass("d-none");
        }
    }

    function alertSuccessSingleDWG() {
        var items_dwg = document.getElementById('dwg');

        if (items_dwg) {
            $(".message-dwg").removeClass("d-none");
        }
    }
    
</script>

@endsection