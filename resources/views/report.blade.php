@extends('MasterPage.admin')

@section('admin')
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="table-responsive my-5">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">ID Propiedad</th>
                            <th scope="col">Entidad federativa</th>
                            <th scope="col">Municipio</th>
                            <th scope="col">Localidad</th>
                            <th scope="col">Folio REGPUG</th>
                            <th scope="col">Folio Catastral</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->propiedad_id }}</td>
                                <td>{{ $item->entidad_federativa }}</td>
                                <td>{{ $item->municipio }}</td>
                                <td>{{ $item->localidad }}</td>
                                <td>{{ $item->folio_regpub }}</td>
                                <td>{{ $item->folio_catastral }}</td>
                                <td><a class="btn btn-warning" href="#">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection