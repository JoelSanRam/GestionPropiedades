@extends('MasterPage.admin')

@section('admin')

<h1 class="page-header">Crear Predio</h1>

<div id="wizard">
    <ul>
        <li class="col-md-3 col-sm-4 col-6 active">
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

<form action="{{ route('create-dato') }}" method="POST" class="form-control-with-bg">
    @csrf
    <div class="jumbotron my-5 py-3">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>ID</label>
                <input name="propiedad_id" type="text" class="form-control m-b-5" required>
            </div>
            <div class="form-group col-md-6">
                <label>Entidad federativa</label>
                <input name="entidad_federativa" type="text" class="form-control m-b-5" placeholder="Ingresar entidad federativa">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Municipio</label>
                <input name="municipio" type="text" class="form-control m-b-5" placeholder="Ingresar municipio">
            </div>
            <div class="form-group col-md-6">
                <label>Localidad</label>
                <input name="localidad" type="text" class="form-control m-b-5" placeholder="Ingresar localidad">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Folio Reg. Pub</label>
                <input name="folio_regpub" type="text" class="form-control m-b-5" placeholder="Ingresar folio">
            </div>
            <div class="form-group col-md-6">
                <label>Folio catastral</label>
                <input name="folio_catastral" type="text" class="form-control m-b-5" placeholder="Ingresar folio catastral">
            </div>
        </div>

        <div class="form-row justify-content-end">
            <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
        </div>
    </div>
</form>

@endsection
