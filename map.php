<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title></title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
    <style>
      body {
        margin: 0;
        padding: 0;
      }

      #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
      }
      .marker {
  background-image: url('location.png');
  background-size: cover;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  cursor: pointer;
}
    </style>
</head>
<body>

<div id='map'></div>

<script>

mapboxgl.accessToken = 'pk.eyJ1IjoiZGF2aWRlZnRpbW92IiwiYSI6ImNrM3J5b3F4MDAxZzUzc3F3Y2tlZTE0ZjcifQ.XgGQlnd2SSTKoxRO4yGa3g';

var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/davideftimov/ck3lxjhqj51ql1dpgqobuyl9t',
  center: [3.878,43.608], 
  zoom: 14.31
});

// code from the next step will go here!
var geojson = {
  type: 'FeatureCollection',
  features: [{
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [3.877,43.608]
    },
    properties: {
      title: 'Mapbox',
      description: 'Washington, D.C.'
    }
  }]
};

geojson.features.forEach(function(marker) {

  // create a HTML element for each feature
  var el = document.createElement('div');
  el.className = 'marker';

  // make a marker for each feature and add to the map
  new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .addTo(map);
});
</script>

</body>
</html>