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
            <a>
                <span class="number">5</span>
                <span class="info text-ellipsis">
                    Coordenadas
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a>
                <span class="number">6</span>
                <span class="info text-ellipsis">
                    Documentos Adjuntos
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a>
                <span class="number">7</span>
                <span class="info text-ellipsis">
                    Imagenes
                </span>
            </a>
        </li>
        <li class="col-md-3 col-sm-4 col-6">
            <a>
                <span class="number">8</span>
                <span class="info text-ellipsis">
                    Registro Completado
                </span>
            </a>
        </li>
    </ul>
    
    
    <div class="tab-content">
        <div id="step-1" class="tab-pane active show" role="tabpanel" aria-labelledby="step-1">
            <form action="{{ route('create-propiedad') }}" method="POST" class="form-control-with-bg">
                @csrf
                <div class="jumbotron my-5 py-3">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID Propiedad</label>
                            <input type="text" class="form-control m-b-5" value="" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>ID de origen</label>
                            <input name="origen_id" type="text" class="form-control m-b-5" placeholder="Ingresar id de origen">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tipo</label>
                            <input name="tipo" type="text" class="form-control m-b-5" placeholder="Ingresar tipo" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Granja</label>
                            <select name="granja" class="form-control m-b-5" required>
                                <option value="">Seleccionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Estatus</label>
                            <input name="estatus" type="text" class="form-control m-b-5" placeholder="Ingresar estatus" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nombre corto</label>
                            <input name="nombre_corto" type="text" class="form-control m-b-5" placeholder="Ingresar nombre corto" required>
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Observaciones</label>
                            <input name="observaciones" type="text" class="form-control m-b-5" placeholder="Ingresar observaciones">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Propietario</label>
                            <input name="propietario" type="text" class="form-control m-b-5" placeholder="Ingresar propietario" required>
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Entidad federativa</label>
                            <input name="entidad_federativa" type="text" class="form-control m-b-5" placeholder="Ingresar entidad federativa" required>
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
            
                    <div class="form-row justify-content-end">
                        <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
                        <button type="submit" class="btn btn-warning btn-lg">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="step-2" class="tab-pane" role="tabpanel">
            <form action="{{ route('create-ubicacion') }}" method="POST" class="form-control-with-bg">
                @csrf
                <div class="jumbotron my-5 py-3">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID Propiedad</label>
                            <input type="text" class="form-control m-b-5" value="" readonly>
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
                            <input name="codigo_postal" type="text" class="form-control m-b-5" placeholder="Ingresar codigo postal" required>
                        </div>
                    </div>
            
                    <div class="form-row justify-content-end">
                        <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
                        <button type="submit" class="btn btn-warning btn-lg">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="step-3" class="tab-pane" role="tabpanel">
            <form action="{{ route('create-dimencion') }}" method="POST" class="form-control-with-bg">
                @csrf
                <div class="jumbotron my-5 py-3">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID Propiedad</label>
                            <input type="text" class="form-control m-b-5" value="" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Superficie de Construcción (mts<sup>2</sup>)</label>
                            <input name="superficie_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar superficie de construccion">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Superficie de terreno (mts<sup>2</sup>)</label>
                            <input name="superficie_terreno" type="text" class="form-control m-b-5" placeholder="Ingresar superficie del terreno" required>
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
            
                    <div class="form-row justify-content-end">
                        <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
                        <button type="submit" class="btn btn-warning btn-lg">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="step-4" class="tab-pane" role="tabpanel">
            <div class="row">
                <div class="col-md-6 mt-3 mx-auto">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mt-3 mx-auto">
                    @if(Session::has('message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{!! Session::get('message') !!}</strong>
                        </div>
                    @endif
                </div>
            </div>
            <form action="{{ route('create-valor') }}" method="POST" class="form-control-with-bg">
                @csrf
                <div class="jumbotron my-5 py-3">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ID Propiedad</label>
                            <input type="text" class="form-control m-b-5" value="" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Valor de construccion</label>
                            <input name="valor_construccion" type="text" class="form-control m-b-5" placeholder="Ingresar valor de construccion">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Valor comercial</label>
                            <input name="valor_comercial" type="text" class="form-control m-b-5" placeholder="Ingresar valor comercial" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de valor comercial</label>
                            <input name="fecha_valor_comercial" type="date" class="form-control m-b-5">
                        </div>
                    </div>
            
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Valor catastral</label>
                            <input name="valor_catastral" type="text" class="form-control m-b-5" placeholder="Ingresar valor catastral" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de valor catastral</label>
                            <input name="fecha_valor_catastral" type="date" class="form-control m-b-5">
                        </div>
                    </div>
            
                    <div class="form-row justify-content-end">
                        <a href="/listado" class="btn btn-secondary btn-lg mr-2">Cancelar</a>
                        <button type="submit" class="btn btn-warning btn-lg">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="copyright">
    <p>© 2021 Desarrollado por <a href="https://www.buho-solutions.com">Buho solutions</a></p>
</div>
@endsection
