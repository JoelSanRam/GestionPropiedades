@extends('MasterPage.admin')

@section('admin')

<h1 class="page-header">Mapa general</h1>
<!-- begin breadcrumb -->

    <!-- begin page-header -->
    <form class="my-2" action="" method="GET">

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

        <button type="submit" class="btn btn-success mr-1 ml-2">Filtrar</button>

    </form>
<!-- end page-header -->

<div class="row">
  <div class="col-md-12 col-12">
    <div id="map"></div>
  </div>
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
      zoom: 3,
      center: { lat: 24.886, lng: -70.268 },
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
      const detailsLink = `<a href="http://127.0.0.1:8000/detalles/${marker.propiedad_id}">Ver Detalles</a>`; // link detalles
      const infowindow = new google.maps.InfoWindow({ // window show clic marker
        content: detailsLink,
        maxWidth: 100,
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

