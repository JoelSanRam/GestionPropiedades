@extends('MasterPage.admin')

@section('admin')
    
    <div class="row mt-5">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{!! Session::get('message') !!}</strong>
                </div>
            @endif
        </div>

        @if ( $errors->any() )
            <div class="alert alert-danger">
                @foreach( $errors->all() as $error )<li>{{ $error }}</li>@endforeach
            </div>
        @endif
    </div>

    <div class="row my-3">
        <div class="col-md-8 m-auto">
            <div class="alert alert-warning" role="alert">
                Solo se permiten archivos excel
            </div>
            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="input-group mb-3">
					<div class="custom-file">
					    <input type="file" class="custom-file-input" id="registros" name="registros">
					    <label class="custom-file-label" for="datos">Elige tu archivo</label>
					</div>
				</div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>

@endsection