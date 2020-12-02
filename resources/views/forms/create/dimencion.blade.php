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
        <li class="col-md-3 col-sm-4 col-6 active">
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
                    Documentos Adjuntos
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a>
                <span class="number">7</span>
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

<form action="{{ route('create-dimencion') }}" method="POST" class="form-control-with-bg">
    @csrf
    <div class="jumbotron my-5 py-3">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>ID Propiedad</label>
                <input type="text" class="form-control m-b-5" value="@if($id == null) 1 @else {{ intval($id) + 1 }} @endif" readonly>
            </div>
            <div class="form-group col-md-6">
                <label>Superficie de Construccion</label>
                <input name="superficie_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar superficie de construccion">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Superficie de terreno</label>
                <input name="superficie_terreno" type="text" class="form-control m-b-5" placeholder="Ingresar superficie del terreno" required>
            </div>
            <div class="form-group col-md-6">
                <label>Frente</label>
                <input name="frente" type="text" class="form-control m-b-5" placeholder="Ingresar frente" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Fondo</label>
                <input name="fondo" type="text" class="form-control m-b-5" placeholder="Ingresar fondo" required>
            </div>
            <div class="form-group col-md-6">
                <label>Capacidad granja</label>
                <input name="capacidad_granja" type="text" class="form-control m-b-5" placeholder="Ingresar capacidad granja">
            </div>
        </div>

        <div class="form-row justify-content-end">
            <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
        </div>
    </div>
</form>

@endsection



