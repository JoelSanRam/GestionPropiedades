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
        <li class="col-md-3 col-sm-4 col-6 active">
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

<form action="{{ route('create-coordenada') }}" method="POST" class="form-control-with-bg">
    @csrf
    <div class="jumbotron my-5 py-3">

        <div class="form-row">
            <div class="form-group col-md-3">
                <label>ID</label>
                <input name="propiedad_id" type="text" class="form-control" required>
            </div>
        </div>

        <a href="javascript:void(0);" class="btn btn-primary my-3 add_button">Agregar Campo</a>

        <div class="field_wrapper">
            <div class="form-row mb-2">
                <div class="form-group col-md-3">
                    <input name="lat[]" type="text" class="form-control" placeholder="Ingresar latitud" required>
                </div>
                <div class="form-group col-md-3">
                    <input name="lon[]" type="text" class="form-control" placeholder="Ingresar longitud" required>
                </div>
            </div>
        </div>

        <div class="form-row justify-content-end">
            <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
        </div>
    </div>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10;
    var addButton = $('.add_button'); 
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = `
        <div class="form-row mb-2">
            <div class="form-group col-md-3">
                <input name="lat[]" type="text" class="form-control" placeholder="Ingresar latitud" required>
            </div>
            <div class="form-group col-md-3">
                <input name="lon[]" type="text" class="form-control" placeholder="Ingresar longitud" required>
            </div>
            <button class="btn btn-danger remove_button btn-sm">Borrar</button>
        </div>
    `;

    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });

    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>

@endsection
