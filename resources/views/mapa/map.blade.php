@extends('MasterPage.admin')

@section('admin')

<h1 class="page-header">Mapa general</h1>
<!-- begin breadcrumb -->

    <!-- begin page-header -->
    <form class="my-2" action="{{ route('search-map') }}" method="GET">

      <label style="margin-left: 10px">Granja</label>
      <select class="page-header form-control-sm" name="granja">
          <option value="">Elegir</option>
          <option>Si</option>
          <option>No</option>
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

      <button type="submit" class="btn btn-success mr-1 ml-2">Filtrar</button>

    </form>
<!-- end page-header -->

<div class="row">
  <div class="col-md-12 col-12">
    <div class="principal-map" id="map"></div>
  </div>
</div> <br>
<div class="copyright">
    <p>© 2021 Desarrollado por <a href="https://www.buho-solutions.com">Buho solutions</a></p>
</div>


<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzlAU7AYsNOTbWNsuvgXhyIPSl07JSJ_g&callback=initMap&libraries=&v=weekly"defer></script>

<script>


  let coords = @json($polygons);
  let arrayCoords = [];

  coords.forEach(item => {
    //Si el id  no existe en arrayCoords entonces
    //la creamos e inicializamos el arreglo de points.
    if(!arrayCoords.hasOwnProperty(item.propiedad_id)){
      arrayCoords[item.propiedad_id] = {
        points: []
      }
    }

    //Agregamos los puntos para formar el poligono.
    arrayCoords[item.propiedad_id].points.push({
      //propiedad_id: item.propiedad_id,
      lat: item.lat,
      lng: item.lng
    })

  })

  function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 7,
      center: { lat: 19.6930200, lng: -89.0503700 },
      mapTypeId: "terrain",
    });

    ///// print coords ////

    arrayCoords.forEach(item => {
      const polygon = new google.maps.Polygon({
        paths: item.points,
        strokeColor: "#FF0000",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: "#FF0000",
        fillOpacity: 0.35,
      });
      polygon.setMap(map);
    });

    setMarkers(map);

  }

  ///// print markers ////

  const markers = @json($markers);

  // func show markers
  function setMarkers(map) {

    const image = {
      url: "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
      size: new google.maps.Size(20, 32),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(0, 32),
    };

    // loop for show markers
    for (let i = 0; i < markers.length; i++) {
      const marker = markers[i];
      const detailsLink = `
      <p>${marker.nombre_corto}</p>
      <a href="http://127.0.0.1:8000/detalles/${marker.propiedad_id}">Ver Detalles</a>
      `; // link detalles
      const infowindow = new google.maps.InfoWindow({ // window show clic marker
        content: detailsLink,
        maxWidth: 200,
      });

      const markerMap = new google.maps.Marker({
        position: { lat: marker.lat, lng: marker.lng },
        map,
        icon: image,
      });

      // click show window
      markerMap.addListener("click", () => {
          infowindow.open(map, markerMap);
      });
    }
  }
</script>

{{--<script>
  let coords = @json($data);
  let arrayCoords = [];

  coords.forEach(item => {
    //Si el id  no existe en arrayCoords entonces
    //la creamos e inicializamos el arreglo de points.
    if(!arrayCoords.hasOwnProperty(item.propiedad_id)){
      arrayCoords[item.propiedad_id] = {
        points: []
      }
    }

    //Agregamos los puntos para formar el poligono.
    arrayCoords[item.propiedad_id].points.push({
      //propiedad_id: item.propiedad_id,
      lat: item.lat,
      lng: item.lng
    })

  })

  arrayCoords.forEach(item => console.log(item.points))

</script>--}}
@endsection

