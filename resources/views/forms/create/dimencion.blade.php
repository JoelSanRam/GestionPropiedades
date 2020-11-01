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
        <li class="col-md-3 col-sm-4 col-6 active">
            <a href="#step-4">
                <span class="number">4</span>
                <span class="info text-ellipsis">
                    Dimenciones
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
                    Registro Completado
                </span>
            </a>
        </li>
    </ul>
</div>

<form action="{{ route('create-dimencion') }}" method="POST" class="form-control-with-bg">
    @csrf
    <div class="jumbotron my-5 py-3">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>ID</label>
                <input name="propiedad_id" type="text" class="form-control m-b-5" required>
            </div>
            <div class="form-group col-md-6">
                <label>Superficie de Construccion</label>
                <input name="superficie_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar superficie de construccion">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Superficie de terreno</label>
                <input name="superficie_terreno" type="text" class="form-control m-b-5" placeholder="Ingresar superficie del terreno">
            </div>
            <div class="form-group col-md-6">
                <label>Frente</label>
                <input name="frente" type="text" class="form-control m-b-5" placeholder="Ingresar frente">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Fondo</label>
                <input name="fondo" type="text" class="form-control m-b-5" placeholder="Ingresar fondo">
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



