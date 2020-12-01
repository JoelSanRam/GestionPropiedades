@extends('MasterPage.admin')

@section('admin')

<h1 class="page-header">Crear Predio</h1>

<div id="wizard">
    <ul>
        <li class="col-md-3 col-sm-4 col-6 active">
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
        <li class="col-md-3 col-sm-4 col-6">
            <a>
                <span class="number">6</span>
                <span class="info text-ellipsis">
                    Marcador
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a>
                <span class="number">7</span>
                <span class="info text-ellipsis">
                    Documentos Adjuntos
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6 ">
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


<form action="{{ route('create-propiedad') }}" method="POST" class="form-control-with-bg">
    @csrf
    <div class="jumbotron my-5 py-3">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>ID Propiedad</label>
                <input type="text" class="form-control m-b-5" value="@if($id == null) 1 @else {{ intval($id) + 1 }} @endif" readonly>
            </div>
            <div class="form-group col-md-6">
                <label>ID de origen</label>
                <input name="origen_id" type="text" class="form-control m-b-5" placeholder="Ingresar id de origen">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Tipo</label>
                <input name="tipo" type="text" class="form-control m-b-5" placeholder="Ingresar tipo" required>
            </div>
            <div class="form-group col-md-6">
                <label>Granja</label>
                <select name="granja" class="form-control m-b-5" required>
                    <option value="">Selecionar</option>
                    <option>Si</option>
                    <option>No</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Estatus</label>
                <input name="estatus" type="text" class="form-control m-b-5" placeholder="Ingresar estatus" required>
            </div>
            <div class="form-group col-md-6">
                <label>Nombre corto</label>
                <input name="nombre_corto" type="text" class="form-control m-b-5" placeholder="Ingresar nombre corto" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Observaciones</label>
                <input name="observaciones" type="text" class="form-control m-b-5" placeholder="Ingresar observaciones">
            </div>
            <div class="form-group col-md-6">
                <label>Propietario</label>
                <input name="propietario" type="text" class="form-control m-b-5" placeholder="Ingresar propietario" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Entidad federativa</label>
                <input name="entidad_federativa" type="text" class="form-control m-b-5" placeholder="Ingresar entidad federativa" required>
            </div>
            <div class="form-group col-md-4">
                <label>Municipio</label>
                <input name="municipio" type="text" class="form-control m-b-5" placeholder="Ingresar municipio">
            </div>
            <div class="form-group col-md-4">
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
