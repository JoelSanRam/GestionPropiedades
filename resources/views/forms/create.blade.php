@extends('MasterPage.admin')

@section('admin')

<style type="text/css">
    .loader {
        border: 12px solid #f3f3f3; /* Light grey */
        border-top: 12px solid #3498db; /* Blue */
        border-radius: 50%;
        width: 80px;
        height: 80px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

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
                            <input name="origen_id" type="number" class="form-control m-b-5" placeholder="Ingresar id de origen">
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
                            <input name="parcela" type="number" class="form-control m-b-5" placeholder="Ingresar parcela">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Ejido Lote</label>
                            <input name="lote" type="number" class="form-control m-b-5" placeholder="Ingresar lote">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Solar</label>
                            <input name="solar" type="number" class="form-control m-b-5" placeholder="Ingresar solar">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tablaje</label>
                            <input name="tablaje" type="number" class="form-control m-b-5" placeholder="Ingresar tablaje">
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
                            <input name="ejido_manzana" type="number" class="form-control m-b-5" placeholder="Ingresar manzana de ejido" >
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Codigo postal</label>
                            <input name="codigo_postal" id="codigo_postal" type="number" class="form-control m-b-5" placeholder="Ingresar codigo postal" data-parsley-required="true">
                        </div>
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
                            <input name="superficie_construccion" type="number" step="any" class="form-control m-b-5" placeholder="Ingresar superficie de construccion">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Superficie de terreno (mts<sup>2</sup>)</label>
                            <input name="superficie_terreno" id="superficie_terreno" type="number" step="any" class="form-control m-b-5" placeholder="Ingresar superficie del terreno" data-parsley-required="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Frente (mts)</label>
                            <input name="frente" type="number" step="any" class="form-control m-b-5" placeholder="Ingresar frente" required>
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Fondo (mts)</label>
                            <input name="fondo" type="number" step="any" class="form-control m-b-5" placeholder="Ingresar fondo" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Capacidad granja</label>
                            <input name="capacidad_granja" type="number" class="form-control m-b-5" placeholder="Ingresar capacidad granja">
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
                            <input name="valor_construccion" type="number" step="any" class="form-control m-b-5" placeholder="Ingresar valor de construccion">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Valor comercial</label>
                            <input name="valor_comercial" id="valor_comercial" type="number" step="any" class="form-control m-b-5" placeholder="Ingresar valor comercial" data-parsley-required="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de valor comercial</label>
                            <input name="fecha_valor_comercial" type="date" class="form-control m-b-5">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Valor catastral</label>
                            <input name="valor_catastral" id="valor_catastral" type="number" step="any" class="form-control m-b-5" placeholder="Ingresar valor catastral" data-parsley-required="true">
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

    </div>
</div>

<div class="copyright mt-4">
    <p>© 2021 Desarrollado por <a href="https://www.buho-solutions.com">Buho solutions</a></p>
</div>

<!-- Modal -->
<div class="modal fade" id="sendData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Mensaje</h5>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <div class="loader"></div>
                    </div>
                </div>
                <h6 class="mt-3 text-center">Los datos se estan guardando espere un momento...</h6>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        let buttons = `
            <button type="submit" class="btn btnSubmit text-dark" style="background: #ffc800;">Guardar</button>
            <button class="btn btn-secondary mr-2 btnCancel">Cancelar</button>
        `;

        $('.sw-btn-next').css("background-color", "#1C4482");

        $('.sw-btn-group').append(buttons);

        $('.btnSubmit').click(function(e){
            e.preventDefault();
            
            var error = false;
            var tipo = $('#tipo').val();
            var granja = $('#granja').val();
            var estatus = $('#estatus').val();
            var nombre_corto = $('#nombre_corto').val();
            var propietario = $('#propietario').val();
            var entidad_federativa = $('#entidad_federativa').val();
            var codigo_postal = $('#codigo_postal').val();
            var superficie_terreno = $('#superficie_terreno').val();
            var valor_comercial = $('#valor_comercial').val();
            var valor_catastral = $('#valor_catastral').val();
            var coordenadas = document.getElementById('coordenadas');
            var pdf = document.getElementById('pdf');
            var dwg = document.getElementById('dwg');
            var images = document.getElementById('images');

            // forms Data
            let form_coordenada = new FormData(document.getElementById("form-coordenada"));
            let form_archivo = new FormData(document.getElementById("form-archivo"));
            let form_image = new FormData(document.getElementById("form-image"));
            
            
            if(tipo.length == 0){
                var error = true;
                $('#tipo').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#tipo').removeClass("is-invalid");
            }
            if(granja.length == 0){
                var error = true;
                $('#granja').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#granja').removeClass("is-invalid");
                location.href = "#step-1";
            }
            if(estatus.length == 0){
                var error = true;
                $('#estatus').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#estatus').removeClass("is-invalid");
            }
            if(nombre_corto.length == 0){
                var error = true;
                $('#nombre_corto').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#nombre_corto').removeClass("is-invalid");
            }

            if(propietario.length == 0){
                var error = true;
                $('#propietario').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#propietario').removeClass("is-invalid");
            }

            if(entidad_federativa.length == 0){
                var error = true;
                $('#entidad_federativa').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#entidad_federativa').removeClass("is-invalid");
            }

            if(codigo_postal.length == 0){
                var error = true;
                $('#codigo_postal').addClass("is-invalid");
                location.href = "#step-2";
            }else{
                $('#codigo_postal').removeClass("is-invalid");
            }

            if(superficie_terreno.length == 0){
                var error = true;
                $('#superficie_terreno').addClass("is-invalid");
                location.href = "#step-3";
            }else{
                $('#superficie_terreno').removeClass("is-invalid");
            }

            if(valor_comercial.length == 0){
                var error = true;
                $('#valor_comercial').addClass("is-invalid");
                location.href = "#step-4";
            }else{
                $('#valor_comercial').removeClass("is-invalid");
            }

            if(valor_catastral.length == 0){
                var error = true;
                $('#valor_catastral').addClass("is-invalid");
                location.href = "#step-4";
            }else{
                $('#valor_catastral').removeClass("is-invalid");
            }

            if(coordenadas.files.length == 0){
                var error = true;
                $('#coordenadas').addClass("is-invalid");
                location.href = "#step-5";
            }else{
                $('#coordenadas').removeClass("is-invalid");
            }

            if(pdf.files.length == 0){
                var error = true;
                $('#pdf').addClass("is-invalid");
                location.href = "#step-6";
            }else{
                $('#pdf').removeClass("is-invalid");
            }

            if(dwg.files.length == 0){
                var error = true;
                $('#dwg').addClass("is-invalid");
                location.href = "#step-6";
            }else{
                $('#dwg').removeClass("is-invalid");
            }

            if(images.files.length == 0){
                var error = true;
                $('#images').addClass("is-invalid");
                location.href = "#step-7";
            }else{
                $('#images').removeClass("is-invalid");
            }
            

            if(error == false){

                $('#sendData').modal('show');

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
                        if(data == "success") {

                            $('#sendData').modal('hide'); 

                            Swal.fire({
                                icon: 'success',
                                title: 'Predio creado con exito',
                                showConfirmButton: false,
                                timer: 4000
                            }).then(() => {
                                location.href = "#step-1";
                                location.reload(true);
                            });

                            

                        }
                        console.log(data)
                    },
                    error: function (data) {
                        console.log(data)                
                    }
                });

            }
        });

        
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
            });
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
