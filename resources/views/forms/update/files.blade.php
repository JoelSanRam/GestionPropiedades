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
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">Archivos Adjuntos</h4>
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

                    <div class="row justify-content-center">
                        <div class="col-md-8 mb-4">
                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">PDF</th>
                                        <th scope="col">DWG</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                        <td>
                                            @if($item->pdf != "")
                                                <a href="{{route('delete-pdf', $item->id)}}" class="btn btn-danger btn-block">
                                                    Eliminar PDF
                                                </a>
                                            @else
                                                No se cargo el archivo pdf
                                            @endif
                                        </td>
                                        <td>
                                            @if($item->dwg != "")
                                                <a href="{{route('delete-dwg', $item->id)}}" class="btn btn-warning btn-block">
                                                    Eliminar DWG
                                                </a>
                                            @else
                                                No se cargo el archivo dwg
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        @if($item->pdf == '')
                                            <td>
                                                <form action="{{ route('update-view-archivo-pdf', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-row justify-content-center">
                                                        <div class="form-group col-md-8">
                                                            <label>Archivo PDF</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" onchange="alertSuccessSinglePDF()" name="pdf" id="pdf" lang="es" required>
                                                                <label class="custom-file-label">Seleccionar Archivo</label>
                                                            </div>
                                                            <div class="alert alert-primary message-pdf d-none my-2" role="alert">
                                                                Archivo Cargado
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row justify-content-center">
                                                        <button type="submit" class="btn btn-primary btn-sm">Subir</button>
                                                    </div>
                                                </form>
                                            </td>
                                        @else
                                            <td></td> 
                                        @endif


                                        @if($item->dwg == '')
                                            <td>
                                                <form action="{{ route('update-view-archivo-dwg', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-row justify-content-center">
                                                        <div class="form-group col-md-8">
                                                            <label>Archivo DWG</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" onchange="alertSuccessSingleDWG()" name="dwg" id="dwg" lang="es" required>
                                                                <label class="custom-file-label">Seleccionar Archivo</label>
                                                            </div>
                                                            <div class="alert alert-primary message-dwg d-none my-2" role="alert">
                                                                Archivo Cargado
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row justify-content-center">
                                                        <button type="submit" class="btn btn-primary btn-sm">Subir</button>
                                                    </div>
                                                </form>
                                            </td>
                                        @else
                                            <td></td>
                                        @endif
                                    </tr>
                              </tbody>
                            </table>
                            
                        </div>
                    </div>

                @else
                    <form action="{{ route('update-archivo') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <label>ID Propiedad</label>
                                <input name="propiedad_id" type="text" class="form-control m-b-5" value="{{ intval($id) }}" readonly>
                            </div>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <label>Archivo PDF</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" onchange="alertSuccessSinglePDF()" name="pdf" id="pdf" lang="es">
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
                                    <input type="file" class="custom-file-input" onchange="alertSuccessSingleDWG()" name="dwg" id="dwg" lang="es">
                                    <label class="custom-file-label">Seleccionar Archivo</label>
                                </div>
                                <div class="alert alert-primary message-dwg d-none my-2" role="alert">
                                    Archivo Cargado
                                </div>
                            </div>
                        </div>

                        <div class="form-row justify-content-end">
                            <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
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

<script>
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
    
</script>

@endsection