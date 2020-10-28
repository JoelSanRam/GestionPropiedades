@extends('MasterPage.admin')

@section('admin')

<h1 class="page-header">Generación de reportes</h1>
    
    <!-- begin page-header -->
    <form class="my-2" action="{{ route('search') }}" method="GET">

        <label for="exampleFormControlSelect1">Tipo</label>
        <select class="page-header form-control-sm" name="tipo">
          <option>Tipo</option>
          <option>PREDIO URBANO</option>
          <option>3</option>
        </select>

        <label style="margin-left: 10px"for="exampleFormControlSelect1">Entidad</label>
        <select class="page-header form-control-sm" name="entidad">
          <option>Entidad</option>
          <option>YUCATAN</option>
          <option>3</option>
        </select>

        <label style="margin-left: 10px">Status</label>
        <select class="page-header form-control-sm" name="status">
          <option>Status</option>
          <option>Vendido</option>
          <option>3</option>
        </select>

        <button type="submit" name="option" value="filtrar" class="btn btn-success mr-1 ml-2">Filtrar</button>
        <button type="submit" name="option" value="reporte" class="btn btn-primary">Generar reporte</button>

    </form>
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
                            <th scope="col">ID</th>
                            <th scope="col">Entidad Federativa</th>
                            <th scope="col">Municipio</th>
                            <th scope="col">Localidad</th>
                            <th scope="col">Folio Reg Pub</th>
                            <th scope="col">Folio Catastral</th>
                            <th scope="col">Superficie Terreno</th>
                            <th scope="col">Valor Comercial</th> 
                            <th scope="col">Valor Catastral</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($datos))
                            @foreach($datos as $item)
                                <tr>
                                    <td>{{ $item->propiedad_id }}</td>
                                    <td>{{ $item->entidad_federativa }}</td>
                                    <td>{{ $item->municipio }}</td>
                                    <td>{{ $item->localidad }}</td>
                                    <td>{{ $item->folio_regpub }}</td>
                                    <td>{{ $item->folio_catastral }}</td>
                                    <td>{{ $item->superficie_terreno }}</td>
                                    <td>{{ $item->valor_comercial }}</td>
                                    <td>{{ $item->valor_catastral }}</td> 
                                </tr>
                            @endforeach
                        @endif
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
