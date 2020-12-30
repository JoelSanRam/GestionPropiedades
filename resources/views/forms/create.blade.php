@extends('MasterPage.admin')

@section('admin')

<h1 class="page-header">Crear Predio</h1>

<div id="wizard">
    <ul class="nav">
        <li class="col-md-3 col-sm-4 col-6">
            <a class="nav-link" href="#step-1" data-toggle="tab">
                <span class="number">1</span>
                <span class="info text-ellipsis">
                    Datos Generales
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a class="nav-link" href="#step-2" data-toggle="tab">
                <span class="number">2</span>
                <span class="info text-ellipsis">
                    Ubicacion
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a class="nav-link" href="#step-3" data-toggle="tab">
                <span class="number">3</span>
                <span class="info text-ellipsis">
                    Dimensiones
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6 ">
            <a class="nav-link" href="#step-4" data-toggle="tab">
                <span class="number">4</span>
                <span class="info text-ellipsis">
                    Valores
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a class="nav-link" href="#step-5" data-toggle="tab">
                <span class="number">5</span>
                <span class="info text-ellipsis">
                    Coordenadas
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a class="nav-link" href="#step-6" data-toggle="tab">
                <span class="number">6</span>
                <span class="info text-ellipsis">
                    Documentos Adjuntos
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a class="nav-link" href="#step-7" data-toggle="tab">
                <span class="number">7</span>
                <span class="info text-ellipsis">
                    Imagenes
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a class="nav-link" href="#step-8" data-toggle="tab">
                <span class="number">8</span>
                <span class="info text-ellipsis">
                    Registro Completado
                </span>
            </a>
        </li>
    </ul>
    
    <div class="tab-content">

        <div id="step-1" class="tab-pane active show" role="tabpanel" aria-labelledby="step-1">
            <form id="form-propiedad" data-parsley-validate="true">
                @csrf
                <div class="jumbotron my-2">
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
                            <input name="tipo" id="tipo" type="text" class="form-control m-b-5" placeholder="Ingresar tipo" data-parsley-required="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Granja</label>
                            <select name="granja" id="granja" class="form-control m-b-5" data-parsley-required="true">
                                <option value="">Seleccionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Estatus</label>
                            <input name="estatus" id="estatus" type="text" class="form-control m-b-5" placeholder="Ingresar estatus" data-parsley-required="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nombre corto</label>
                            <input name="nombre_corto" id="nombre_corto" type="text" class="form-control m-b-5" placeholder="Ingresar nombre corto" data-parsley-required="true">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Observaciones</label>
                            <input name="observaciones" type="text" class="form-control m-b-5" placeholder="Ingresar observaciones">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Propietario</label>
                            <input name="propietario" id="propietario" type="text" class="form-control m-b-5" placeholder="Ingresar propietario" data-parsley-required="true">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Entidad federativa</label>
                            <input name="entidad_federativa" id="entidad_federativa" type="text" class="form-control m-b-5" placeholder="Ingresar entidad federativa" data-parsley-required="true">
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
        
                </div>
            </form>
        </div>
        <div id="step-2" class="tab-pane" role="tabpanel">
            <form id="form-ubicacion" data-parsley-validate="true">
                @csrf
                <div class="jumbotron my-2">
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
                            <input name="codigo_postal" id="codigo_postal" type="text" class="form-control m-b-5" placeholder="Ingresar codigo postal" data-parsley-required="true">
                        </div>
                    </div>
                    <div class="form-row">
                        <button class="btn btn-success" type="submit">
                            Send
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div id="step-3" class="tab-pane" role="tabpanel">
            <form id="form-dimencion" data-parsley-validate="true">
                @csrf
                <div class="jumbotron my-2">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID Propiedad</label>
                            <input type="text" class="form-control m-b-5" value="@if($id == null) 1 @else {{ intval($id) + 1 }} @endif" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Superficie de Construcción (mts<sup>2</sup>)</label>
                            <input name="superficie_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar superficie de construccion">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Superficie de terreno (mts<sup>2</sup>)</label>
                            <input name="superficie_terreno" id="superficie_terreno" type="text" class="form-control m-b-5" placeholder="Ingresar superficie del terreno" data-parsley-required="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Frente (mts)</label>
                            <input name="frente" type="text" class="form-control m-b-5" placeholder="Ingresar frente" required>
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Fondo (mts)</label>
                            <input name="fondo" type="text" class="form-control m-b-5" placeholder="Ingresar fondo" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Capacidad granja</label>
                            <input name="capacidad_granja" type="text" class="form-control m-b-5" placeholder="Ingresar capacidad granja">
                        </div>
                    </div>
            
                </div>
            </form>
        </div>
        <div id="step-4" class="tab-pane" role="tabpanel">
            <form id="form-valor" data-parsley-validate="true">
                @csrf
                <div class="jumbotron my-2">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID Propiedad</label>
                            <input type="text" class="form-control m-b-5" value="@if($id == null) 1 @else {{ intval($id) + 1 }} @endif" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Valor de construccion</label>
                            <input name="valor_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar valor de construccion">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Valor comercial</label>
                            <input name="valor_comercial" id="valor_comercial" type="text" class="form-control m-b-5" placeholder="Ingresar valor comercial" data-parsley-required="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de valor comercial</label>
                            <input name="fecha_valor_comercial" type="date" class="form-control m-b-5">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Valor catastral</label>
                            <input name="valor_catastral" id="valor_catastral" type="text" class="form-control m-b-5" placeholder="Ingresar valor catastral" data-parsley-required="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de valor catastral</label>
                            <input name="fecha_valor_catastral" type="date" class="form-control m-b-5">
                        </div>
                    </div>
            
                </div>
            </form>
        </div>
        <div id="step-5" class="tab-pane" role="tabpanel">
            <form id="form-coordenada" enctype="multipart/form-data" data-parsley-validate="true">
                @csrf
                <div class="jumbotron my-2">

                    <div class="form-row justify-content-center">
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>ID Propiedad</label>
                                <input type="text" class="form-control m-b-5" value="@if($id == null) 1 @else {{ intval($id) + 1 }} @endif" readonly>
                            </div>

                            <div class="input-group my-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" accept=".xlsx, .xlsm, .xlsb, .xltx, .xltm,.xls,.xlt,.xls,.xml,.xla,.xlw" onchange="alertSuccess()" id="coordenadas" name="coordenadas" data-parsley-required="true">
                                    <label class="custom-file-label" for="coordenadas">Elige tu archivo</label>
                                </div>
                            </div>

                            <br>

                            <div class="alert alert-primary message d-none" role="alert">
                                Archivo Cargado
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div id="step-6" class="tab-pane" role="tabpanel">
            <form id="form-archivo" enctype="multipart/form-data" data-parsley-validate="true">
                @csrf
                <div class="jumbotron my-2">

                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-6">
                            <label>ID Propiedad</label>
                            <input name="propiedad_id" type="text" class="form-control m-b-5" value="@if($id == null) 1 @else {{ intval($id) + 1 }} @endif" readonly>
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-6">
                            <label>Archivo PDF</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept = ".pdf" onchange="alertSuccessSinglePDF()" name="pdf" id="pdf" lang="es" data-parsley-required="true">
                                <label class="custom-file-label">Seleccionar Archivo</label>
                            </div>
                            <div class="alert alert-primary message-pdf d-none my-2" role="alert">
                                Archivo Cargado
                            </div>
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-6">
                            <label>Archivo DWG</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept = ".dwg" onchange="alertSuccessSingleDWG()" name="dwg" id="dwg" lang="es">
                                <label class="custom-file-label">Seleccionar Archivo</label>
                            </div>
                            <div class="alert alert-primary message-dwg d-none my-2" role="alert">
                                Archivo Cargado
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div id="step-7" class="tab-pane" role="tabpanel">
            <form id="form-image" enctype="multipart/form-data" data-parsley-validate="true">
                @csrf

                <input type="hidden" name="action" value="create">
                <div class="jumbotron my-2">

                    <div class="form-row justify-content-center">
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>ID Propiedad</label>
                                <input type="text" class="form-control m-b-5" name="propiedad_id" value="@if($id == null) 1 @else {{ intval($id) + 1 }} @endif" readonly>
                            </div>

                            <div class="input-group my-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" accept=".jpg, .svg, .png," onchange="uploadImages()" id="images" name="images[]" multiple data-parsley-required="true">
                                    <label class="custom-file-label" for="images">Elegir imagenes</label>
                                </div>
                            </div>

                            <br>

                            <div class="text-danger mb-2 limit-invalid d-none">
                                Solo se pueden subir 5 imagenes por predio.
                            </div>

                            <div id="container-img" class="mb-3"></div>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
        <div id="step-8" class="tab-pane" role="tabpanel">
            <form>
                <div class="jumbotron my-2 text-center">
                    <h2 class="text-inverse">Registro Exitoso</h2>
                    <p><a href="{{ route('listado') }}" class="btn btn-primary btn-lg">Listado de Predios</a></p>
                </div>
            </form>
        </div>

    </div>
</div>


<div class="copyright">
    <p>© 2021 Desarrollado por <a href="https://www.buho-solutions.com">Buho solutions</a></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        let buttons = `
            <button type="submit" class="btn btn-warning btnSubmit">Guardar</button>
            <button class="btn btn-secondary mr-2 btnCancel">Cancelar</button>
        `;

        $('.sw-btn-group').append(buttons);

        // create
        /*$(".btnSubmit").click(function(event) {
            event.preventDefault();

            let form_coordenada = new FormData(document.getElementById("form-coordenada"));
            let form_archivo = new FormData(document.getElementById("form-archivo"));
            let form_image = new FormData(document.getElementById("form-image"));

            $.ajax({
                url: "{{ route('create-propiedad') }}",
                type: "POST",
                dataType: 'json',
                data: $('#form-propiedad').serialize(),
                success: function (data) {
                    console.log(data)
                },
                error: function (data) {
                    console.log(data)
                }
            });

            ////////
            $.ajax({
                url: "{{ route('create-ubicacion') }}",
                type: "POST",
                dataType: 'json',
                data: $('#form-ubicacion').serialize(),
                success: function (data) {
                    console.log(data)
                },
                error: function (data) {
                    console.log(data)
                }
            });

            ////////
            $.ajax({
                url: "{{ route('create-dimencion') }}",
                type: "POST",
                dataType: 'json',
                data: $('#form-dimencion').serialize(),
                success: function (data) {
                    console.log(data)
                },
                error: function (data) {
                    console.log(data)
                }
            });

            ////////
            $.ajax({
                url: "{{ route('create-valor') }}",
                type: "POST",
                dataType: 'json',
                data: $('#form-valor').serialize(),
                success: function (data) {
                    console.log(data)
                },
                error: function (data) {
                    console.log(data)
                }
            });

            ////////
            $.ajax({
                url: "{{ route('create-coordenada') }}",
                type: "POST",
                dataType: 'json',
                data: form_coordenada,
                processData: false,
                contentType: false,
                success: function (data) {
                    console.log(data)
                },
                error: function (data) {
                    console.log(data)
                }
            });

            ////////
            $.ajax({
                url: "{{ route('create-archivo') }}",
                type: "POST",
                dataType: 'json',
                data: form_archivo,
                processData: false,
                contentType: false,
                success: function (data) {
                    console.log(data)
                },
                error: function (data) {
                    console.log(data)
                }
            });

            ////////
            $.ajax({
                url: "{{ route('create-image') }}",
                type: "POST",
                dataType: 'json',
                data: form_image,
                processData: false,
                contentType: false, 
                success: function (data) {
                    console.log(data)
                },
                error: function (data) {
                    console.log(data)                }
            });
        });
*/
        $('.btnCancel').click(function(event) {
            event.preventDefault();

            Swal.fire({
                title: '¿Estas seguro de cancelar la captura?',
                text: "Todos los datos se perderan",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = "{{ route('listado') }}";
                }
            })
        });
      
    });

    // coor
    function alertSuccess() {
        var file = document.querySelector('input[type=file]').files[0];

        if (file) {
            $(".message").removeClass("d-none");
        }
    }

    // alert files

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

    // preview images 

    function uploadImages(){

        document.getElementById("container-img").innerHTML="";

        let images = document.getElementById('images');

        if(images && images.files.length > 0){

            if(images.files.length > 5){
                $(".limit-invalid").removeClass("d-none");
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
