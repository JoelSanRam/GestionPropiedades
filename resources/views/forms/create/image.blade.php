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
                    Documentos Adjuntos
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6 active">
            <a>
                <span class="number">6</span>
                <span class="info text-ellipsis">
                    Imagenes
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
    

<form action="{{ route('create-image') }}" method="POST" class="form-control-with-bg" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="action" value="create">
    <div class="jumbotron my-5 py-3">

        <div class="form-row justify-content-center">
            <div class="col-md-8">

                <div class="form-group">
                    <label>ID Propiedad</label>
                    <input type="text" class="form-control m-b-5" name="propiedad_id" value="@if($id == null) 1 @else {{ intval($id) }} @endif" readonly>
                </div>

                <div class="input-group my-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" accept=".jpg, .svg, .png," onchange="uploadImages()" id="images" name="images[]" required multiple>
                        <label class="custom-file-label" for="coordenadas">Eligir imagenes</label>
                    </div>
                </div>

                <br>

                <div id="container-img" class="mb-3"></div>
            </div>
        </div>
        
        <div class="form-row justify-content-end">
            <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
        </div>
    </div>
</form>

<script>

    function uploadImages(){

        document.getElementById("container-img").innerHTML="";

        let images = document.getElementById('images');

        if(images && images.files.length > 0){
            
            for (var i = 0; i <= images.files.length - 1; i++) {
                previewImage(images.files[i]);
            }
        }

    }

    function previewImage(img) {
        let reader = new FileReader();
        reader.readAsDataURL(img);

        reader.onloadend = function() {
            let img = `<img src="${reader.result}" width="100" height="100" class="img-fit">`;
            $("#container-img").append(img);
        }
    }

</script>

@endsection
