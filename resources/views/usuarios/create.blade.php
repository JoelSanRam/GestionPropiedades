@extends('MasterPage.admin')

@section('admin')

<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">

</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Creación de Usuarios </h1>
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
                <div class="row">

                        <div class="col-md-6">
                            <form>
								<div class="form-group row m-b-15">
									<label class="col-form-label col-md-3">Nombre completo</label>
									<div class="col-md-9">
										<input type="email" class="form-control m-b-5" placeholder="Enter email">
										<small class="f-s-12 text-grey-darker">Ingrese su nombre completo</small>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-form-label col-md-3">Tipo de usuario</label>
									<div class="col-md-9">
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
                                        </select>
                                        <small class="f-s-12 text-grey-darker">Seleccione un tipo de usuario</small>
									</div>
								</div>


							</form>
                        </div>
                        <div class="col-md-6">
                            <form>
								<div class="form-group row m-b-15">
									<label class="col-form-label col-md-3">Contraseña</label>
									<div class="col-md-9">
										<input type="email" class="form-control m-b-5" placeholder="Enter email">
										<small class="f-s-12 text-grey-darker">Ingrese una contraseña</small>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-form-label col-md-3">Correo electrónico</label>
									<div class="col-md-9">
										<input type="email" class="form-control m-b-5" placeholder="Enter email">
										<small class="f-s-12 text-grey-darker">Ingrese un correo electrónico</small>
									</div>
								</div>


							</form>
                        </div>

                </div>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <p><a href="javascript:;" class="btn btn-secondary btn-lg">Regresar</a>   <a href="javascript:;" class="btn btn-primary btn-lg">Guardar</a> </p>
                    </div>
                </div>


            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->
@endsection
