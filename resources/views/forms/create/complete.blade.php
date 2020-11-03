@extends('MasterPage.admin')

@section('admin')

<h1 class="page-header">Crear Predio</h1>

<div id="wizard">
    <ul>
        <li class="col-md-3 col-sm-4 col-6">
            <a href="#step-1">
                <span class="number">1</span> 
                <span class="info text-ellipsis">
                    Datos Generales
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a href="#step-2">
                <span class="number">2</span> 
                <span class="info text-ellipsis">
                    Datos de la Propiedad
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a href="#step-3">
                <span class="number">3</span>
                <span class="info text-ellipsis">
                    Ubicacion
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a href="#step-4">
                <span class="number">4</span>
                <span class="info text-ellipsis">
                    Dimensiones
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a href="#step-5">
                <span class="number">5</span>
                <span class="info text-ellipsis">
                    Valores
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a href="#step-6">
                <span class="number">6</span>
                <span class="info text-ellipsis">
                    Coordenadas
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a href="#step-7">
                <span class="number">7</span>
                <span class="info text-ellipsis">
                    Marcador
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6 active">
            <a href="#step-8">
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

<form method="POST" class="form-control-with-bg">
    <div class="jumbotron my-5 py-5 text-center">
        <h2 class="text-inverse">Registro Exitoso</h2>
        <p><a href="{{ route('listado') }}" class="btn btn-primary btn-lg">Listado de Predios</a></p>
    </div>
</form>

@endsection
