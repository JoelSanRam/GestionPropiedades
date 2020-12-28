@extends('MasterPage.admin')

@section('admin')

<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">

</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Actualizacion del predio</h1>
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

                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                </div>
                <h4 class="panel-title">Imagenes</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6 my-3 mx-auto">
                        @if(Session::has('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{!! Session::get('message') !!}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                @if(isset($data) && count($data) > 0)

                    <div class="row">
                        @foreach($data as $item)
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $item->filename) }}" class="card-img" >
                                    <div class="card-img-overlay">
                                        <a href="{{ route('delete-image', $item->id) }}" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                @endif

                @if(isset($data) && count($data) < 5)
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <form action="{{ route('create-image') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="action" value="update">
                                <div class="form-row justify-content-center">
                                    <div class="col-md-6">

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

                                        <div class="text-danger mb-2 limit-invalid d-none">
                                            Solo se pueden subir <strong>5</strong> imagenes por predio. Tu ya tienes subido <strong class="img-upload"></strong> imagenes.
                                            Puedes subir <strong class="img-available"></strong> imagenes mas.
                                        </div>

                                        <div id="container-img" class="mb-3"></div>
                                    </div>
                                </div>
                                
                                <div class="form-row justify-content-end">
                                    <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
                                    <button type="submit" class="btn btn-primary btn-lg">Subir imagenes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif


            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->

<script>

    function uploadImages(){

        document.getElementById("container-img").innerHTML="";

        let totalImages = 5;
        let responseImages = @json($data);
        let count = responseImages.length;
        let availableImages = totalImages - count;
        let images = document.getElementById('images');

        console.log(availableImages)

        if(images && images.files.length > 0){

            if(images.files.length > availableImages){ 
                $(".limit-invalid").removeClass("d-none");
                $(".img-upload").html(count);
                $(".img-available").html(availableImages);
                images.value = "";
            } else {
                $(".limit-invalid").addClass("d-none");
                for (var i = 0; i <= images.files.length - 1; i++) {
                    previewImage(images.files[i]);
                }
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
