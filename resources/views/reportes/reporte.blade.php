@extends('MasterPage.admin')

@section('admin')

<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

<h1 class="page-header">Generación de reportes</h1>

    <!-- form desktop -->
    <form id="form-search" class="my-2 d-none d-md-block" action="{{ route('search') }}" method="GET">

        <label style="margin-left: 10px">Entidad</label>
        <select class="page-header form-control-sm" name="entidad">
            <option value="">Elegir</option>
            @foreach($entidades as $item)
                <option>{{ $item->entidad_federativa }}</option>
            @endforeach
        </select>

        <label style="margin-left: 10px">Localidad</label>
        <select class="page-header form-control-sm" name="localidad">
            <option value="">Elegir</option>
            @foreach($localidades as $item)
                <option>{{ $item->localidad }}</option>
            @endforeach
        </select>

        <label style="margin-left: 10px">Propietario</label>
        <select class="page-header form-control-sm" name="propietario">
            <option value="">Elegir</option>
            @foreach($propietarios as $item)
                <option>{{ $item->propietario }}</option>
            @endforeach
        </select>

        <label style="margin-left: 10px">Status</label>
        <select class="page-header form-control-sm" name="status">
            <option value="">Elegir</option>
            @foreach($status as $item)
                <option>{{ $item->estatus }}</option>
            @endforeach
        </select>

        <button type="submit" name="option" value="filtrar" class="btn text-dark mr-2 ml-2" style="background: #ffc800;">Filtrar</button>
        <a type="button" class="btn text-light reporte" style="background: #1C4482;">Generar reporte</a>
    </form>
    <!-- form desktop -->

    <!-- form mobile -->
    <form class="my-2 d-block d-md-none" action="{{ route('search') }}" method="GET">

        <div class="form-row">
            <div class="form-group col-md-12">
                <label style="margin-left: 10px">Entidad</label>
                <select class="page-header form-control-sm" name="entidad">
                    <option value="">Elegir</option>
                    @foreach($entidades as $item)
                        <option>{{ $item->entidad_federativa }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label style="margin-left: 10px">Localidad</label>
                <select class="page-header form-control-sm" name="localidad">
                    <option value="">Elegir</option>
                    @foreach($localidades as $item)
                        <option>{{ $item->localidad }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label style="margin-left: 10px">Propietario</label>
                <select class="page-header form-control-sm" name="propietario">
                    <option value="">Elegir</option>
                    @foreach($propietarios as $item)
                        <option>{{ $item->propietario }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label style="margin-left: 10px">Status</label>
                <select class="page-header form-control-sm" name="status">
                    <option value="">Elegir</option>
                    @foreach($status as $item)
                        <option>{{ $item->estatus }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <button type="submit" name="option" value="filtrar" class="btn btn-success mr-1 ml-2" style="background: #ffc800; color:rgb(0, 0, 0);">Filtrar</button>
            </div>
            <div class="form-group col-md-6">
                <a type="button" class="btn text-light reporte" style="background:#1C4482;">
                    Generar Reporte
                </a>
            </div>
        </div>
        
    </form>
    <!-- form mobile -->

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
                <h4 class="panel-title">Listado de predios</h4>
            </div>
            <!-- end panel-heading -->
            <!-- begin panel-body -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="data-report" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tablaje</th>
                                <th scope="col">Solar</th>
                                <th scope="col">Finca</th>
                                <th scope="col">Parcela</th>
                                <th scope="col">Propietario</th>
                                <th scope="col">Entidad</th>
                                <th scope="col">Localidad</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Nombre Corto</th>
                                <th scope="col">Superficie Terreno</th>
                                <th scope="col">Valor Comercial</th>
                                <th scope="col">Valor Catastral</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($datos))
                                @foreach($datos as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->tablaje }}</td>
                                        <td>{{ $item->solar }}</td>
                                        <td>{{ $item->finca }}</td>
                                        <td>{{ $item->parcela }}</td>
                                        <td>{{ $item->propietario }}</td>
                                        <td>{{ $item->entidad_federativa }}</td>
                                        <td>{{ $item->localidad }}</td>
                                        <td>{{ $item->direccion }}</td>
                                        <td>{{ $item->nombre_corto }}</td>
                                        <td>{{ $item->superficie_terreno }} m<sup>2</sup></td>
                                        <td>${{ number_format($item->valor_comercial, 2) }}</td>
                                        <td>${{ number_format($item->valor_catastral, 2) }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-10 -->
</div>
<!-- end row -->
<div class="copyright">
    <p>© 2021 Desarrollado por <a href="https://www.buho-solutions.com">Buho solutions</a></p>
</div>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">

    
    $('.reporte').click(function(e){
            e.preventDefault();

            let doc = new jsPDF({
              orientation: "landscape",
            });

            doc.text("Propiedades", 10, 10);
            
            doc.autoTable({
                html: '#data-report' 
            })

            doc.save('table.pdf')
            
        });
</script>

@endsection
