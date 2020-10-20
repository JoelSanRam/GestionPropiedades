@extends('MasterPage.admin')

@section('admin')

<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">

</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Creación de predio</h1>
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
                <h4 class="panel-title">Usuarios</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <form action="{{ route('usuarios.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID</label>
                            <input name="name" type="text" class="form-control m-b-5" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label>ID de origen</label>
                            <input name="username" type="text" class="form-control m-b-5" placeholder="Nombre de usuario">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tipo de predio</label>
                            <select class="form-control" name="rol">
                                <option>Terreno</option>
                                <option>Casa</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Granja</label>
                            <input name="granja" type="text" name="granja" class="form-control m-b-5" placeholder="Granja">
                        </div>
                    </div>

                    <div class="form-row justify-content-end">
                        <a href="/usuarios" class="btn btn-secondary btn-lg mr-2">Regresar</a>
                        <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                    </div>
                </form>


            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->
@endsection
