@extends('MasterPage.admin')

@section('admin')

<h1 class="page-header">Generación de reportes</h1>
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li class="breadcrumb-item"><a><button class="btn btn-primary">Generar reporte</button></a></li>
</ol>
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
                <table id="data-table-responsive" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="1%">Tipo</th>
                            <th class="text-nowrap">Entidad</th>
                            <th width="15%" class="text-nowrap">Municipio</th>
                            <th width="15%" class="text-nowrap">Localidad</th>
                            <th class="text-nowrap">Reg. Pub.</th>
                            <th width="15%" class="text-nowrap">Folio Cat.</th>
                            <th width="10%">Valor Comercial</th>
                            <th width="10%">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">Predio Urbano</td>
                            <td >Yucatán</td>
                            <td>Mérida</td>
                            <td>Montecristo</td>
                            <td> 123abc-123bac</td>
                            <td>123abc-123bac</td>
                            <td> 2,000,000</td>
                            <td> Contratado</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">Predio Urbano</td>
                            <td >Yucatán</td>
                            <td>Mérida</td>
                            <td>Montecristo</td>
                            <td> 123abc-123bac</td>
                            <td>123abc-123bac</td>
                            <td> 2,000,000</td>
                            <td> Contratado</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">Predio Urbano</td>
                            <td >Yucatán</td>
                            <td>Mérida</td>
                            <td>Montecristo</td>
                            <td> 123abc-123bac</td>
                            <td>123abc-123bac</td>
                            <td> 2,000,000</td>
                            <td> Contratado</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td width="1%" class="f-s-600 text-inverse">Predio Urbano</td>
                            <td >Yucatán</td>
                            <td>Mérida</td>
                            <td>Montecristo</td>
                            <td> 123abc-123bac</td>
                            <td>123abc-123bac</td>
                            <td> 2,000,000</td>
                            <td> Contratado</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->
@endsection
