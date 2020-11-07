@extends('MasterPage.admin')

@section('admin')
    
    <div class="row mt-5">
        <div class="col-md-8 m-auto">
            @if(Session::has('message'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{!! Session::get('message') !!}</strong>
                </div>
            @endif
        </div>

        @if ( $errors->any() )
            <div class="alert alert-danger">
                @foreach( $errors->all() as $error )<strong>{{ $error }}</strong>@endforeach
            </div>
        @endif
    </div>

    <div class="row my-3">
        <div class="col-md-8 m-auto">
            
            <form action="{{ route('file-upload-files') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Archivos PDF</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="pdfs[]" id="pdfs" lang="es" multiple="multiple">
                        <label class="custom-file-label">Seleccionar Archivos</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Archivos DWG</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="dwgs[]" id="dwgs" lang="es" multiple="multiple">
                        <label class="custom-file-label" >Seleccionar Archivos</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Subir</button>
                </div>
            </form>
        </div>
    </div>

@endsection