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
                <h4 class="panel-title">Valores 2</h4>
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

                @if(!empty($item))
                    <form action="{{ route('update-seguimiento-valor', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>ID</label>
                                <input type="text" class="form-control m-b-5" value="{{ $id }}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Avalúo de terreno</label>
                                <input name="avaluo_terreno" type="text" class="form-control m-b-5" placeholder="Ingresar avalúo de terreno" value="{{ $item->avaluo_terreno }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Estimación de valor de la construcción</label>
                                <input name="estimacion_valor_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar estimación de valor de la construcción" value="{{ $item->estimacion_valor_construccion }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Avalúo de la construcción</label>
                                <input name="avaluo_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar avalúo de la construcción" value="{{ $item->avaluo_construccion }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Valor conjunto</label>
                                <input name="valor_conjunto" type="text" class="form-control m-b-5" placeholder="Ingresar valor conjunto" value="{{ $item->valor_conjunto }}">
                            </div>
                        </div>

                        <div class="form-row justify-content-end">
                            <a href="/listado" class="btn btn-secondary btn-lg mr-2">Regresar</a>
                            <button type="submit" class="btn btn-primary btn-lg">Guardar Cambios</button>
                        </div>
                    </form>
                @else
                    <form id="form-seguimiento-valor">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>ID</label>
                                <input name="propiedad_id" type="text" class="form-control m-b-5" value="{{ $id }}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Avalúo de terreno</label>
                                <input name="avaluo_terreno" type="text" class="form-control m-b-5" placeholder="Ingresar avalúo de terreno">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Estimación de valor de la construcción</label>
                                <input name="estimacion_valor_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar estimación de valor de la construcción">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Avalúo de la construcción</label>
                                <input name="avaluo_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar avalúo de la construcción">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Valor conjunto</label>
                                <input name="valor_conjunto" type="text" class="form-control m-b-5" placeholder="Ingresar valor conjunto">
                            </div>
                        </div>

                        <div class="form-row justify-content-end">
                            <a href="/listado" class="btn btn-secondary btn-lg mr-2">Regresar</a>
                            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                        </div>
                    </form>
                @endif

            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    
    $('#form-seguimiento-valor').on('submit', function (e) {
        e.preventDefault()

        $.ajax({
            url: "{{ route('create-seguimiento-valor') }}",
            type: "POST",
            dataType: 'json',
            data: $('#form-seguimiento-valor').serialize(),
            success: function (data) {
                if(data === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Se guardo la información',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    location.reload(true)
                }
            },
            error: function (data) {
                alert('Ocurrio un error, verifica los datos ingresados');
            }
        });
    })

</script>

@endsection
