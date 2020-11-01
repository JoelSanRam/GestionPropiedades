@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if (Auth::user()->rol == "Administrador")
                        <div>
                            Eres un administrador
                        </div>
                    @elseif (Auth::user()->rol == "Usuario")
                        <div>
                            Eres un Usuario
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let coords = @json($data);
    let nuevoObjeto = [];
    
    coords.forEach( x => {
      //Si el id  no existe en nuevoObjeto entonces
      //la creamos e inicializamos el arreglo de coordenadas. 
      if(!nuevoObjeto.hasOwnProperty(x.propiedad_id)){
        nuevoObjeto[x.propiedad_id] = {
          points: []
        }
      }
      
      //Agregamos los puntos para formar el poligono. 
        nuevoObjeto[x.propiedad_id].points.push({
          //propiedad_id: x.propiedad_id,
          lat: x.lat,
          lng: x.lng
        })
      
    })

    nuevoObjeto.forEach(item => console.log(item.points))
    
</script>

@endsection
