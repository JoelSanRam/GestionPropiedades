@extends('MasterPage.admin')

@section('admin')

<h1 class="page-header">Mapa general</h1>
<!-- begin breadcrumb -->

<!-- end breadcrumb -->
<!-- begin page-header -->
    <label for="exampleFormControlSelect1">Tipo</label>
    <select class="page-header form-control-sm" id="exampleFormControlSelect1">
      <option>Tipo</option>
      <option>Tablaje rústico</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>

    <label style="margin-left: 10px"for="exampleFormControlSelect1">Entidad</label>
    <select class="page-header form-control-sm" id="exampleFormControlSelect1">
      <option>Entidad</option>
      <option>Tablaje rústico</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>

    <label style="margin-left: 10px"for="exampleFormControlSelect1">Status</label>
    <select class="page-header form-control-sm" id="exampleFormControlSelect1">
      <option>Status</option>
      <option>Tablaje rústico</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>

    <button class="btn btn-success" style="margin-left: 10px">Filtrar</button>
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
                <h4 class="panel-title">Listado de predios</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.535652378898!2d-89.69482248506766!3d21.011242786007898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5674b03906566b%3A0x7da2b1624b9b5263!2sCaucel%2C%2097300%20Caucel%2C%20Yuc.!5e0!3m2!1ses-419!2smx!4v1602874088589!5m2!1ses-419!2smx" width="1050" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->
@endsection
