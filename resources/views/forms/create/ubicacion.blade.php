@extends('MasterPage.admin')

@section('admin')

<h1 class="page-header">Crear Predio</h1>

<div id="wizard">
    <ul>
        <li class="col-md-3 col-sm-4 col-6">
            <a>
                <span class="number">1</span>
                <span class="info text-ellipsis">
                    Datos Generales
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6 active">
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

<form action="{{ route('create-ubicacion') }}" method="POST" class="form-control-with-bg">
    @csrf
    <div class="jumbotron my-5 py-3">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>ID Propiedad</label>
                <input type="text" class="form-control m-b-5" value="@if($id == null) 1 @else {{ intval($id) + 1 }} @endif" readonly>
            </div>
            <div class="form-group col-md-6">
                <label>Ejido</label>
                <input name="ejido" type="text" class="form-control m-b-5" placeholder="Ingresar ejido">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Ejido Parcela</label>
                <input name="parcela" type="text" class="form-control m-b-5" placeholder="Ingresar parcela">
            </div>
            <div class="form-group col-md-4">
                <label>Ejido Lote</label>
                <input name="lote" type="text" class="form-control m-b-5" placeholder="Ingresar lote">
            </div>
            <div class="form-group col-md-4">
                <label>Solar</label>
                <input name="solar" type="text" class="form-control m-b-5" placeholder="Ingresar solar">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Tablaje</label>
                <input name="tablaje" type="text" class="form-control m-b-5" placeholder="Ingresar tablaje">
            </div>
            <div class="form-group col-md-6">
                <label>Finca</label>
                <input name="finca" type="text" class="form-control m-b-5" placeholder="Ingresar finca">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Direccion</label>
                <input name="direccion" type="text" class="form-control m-b-5" placeholder="Ingresar direccion">
            </div>
            <div class="form-group col-md-6">
                <label>Ejido Manzana</label>
                <input name="ejido_manzana" type="text" class="form-control m-b-5" placeholder="Ingresar manzana de ejido" >
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Codigo postal</label>
                <input name="codigo_postal" type="text" class="form-control m-b-5" placeholder="Ingresar codigo postal" required>
            </div>
        </div>

        <div class="form-row justify-content-end">
            <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
            <button type="submit" class="btn btn-warning btn-lg">Guardar</button>
        </div>
    </div>
</form>
<div class="copyright">
    <p>© 2021 Desarrollado por <a href="https://www.buho-solutions.com">Buho solutions</a></p>
</div>
@endsection

