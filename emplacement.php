<!DOCTYPE html>
<html lang="en">
<head>

<?php $page = 'emplacement'; include 'includes/head.php'; ?>
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
<style type="text/css">
        .container{
            margin-top: 200px;
        }
    	.treto{
    		padding: 200px 200px 200px 200px;
    	}
    	element.style {
    		position: absolute;
    		width: 380px;
    		height: 500px;
		}
    </style>
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
  background-image: url('imgs/location1.png');
  background-size: cover;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  cursor: pointer;
}
.mapboxgl-popup {
  max-width: 150px;
}

.mapboxgl-popup-content {
  text-align: center;
  font-family: 'Open Sans', sans-serif;
}
    </style>
</head>
<body>
    <div class="allButFooter">
    <?php include 'includes/navbar.php'; ?>
    <div class="container map">

	<div class="row">
		<div class="col-lg-4 prvo text-center">
        <p>7 Grand Rue Jean Moulin</p>
        <p>34000 MONTPELLIER</p>
        <p>Horaires:</p>
        <p>Lundi  : 10h – 18h</p>
        <p>Mardi : 10h – 01h</p>
        <p>Mercredi : 10h – 01h</p>
        <p>Jeudi : 10h – 01h</p>
        <p>Vendredi : 10h – 01h</p>
        <p>Samedi : 10h – 01h</p>
        <p>Dimanche : 10h – 18h</p>
        </div>
		<div class="col-lg-6 treto"><div id='map'></div></div>
	</div>
    </div>
    
    </div>
    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
    <script>
    $(function () {
        $(document).scroll(function(){
            var $nav = $("#mainNavbar");
            $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        })
    })
    </script>
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
      title: 'Science du Café',
      description: 'Montpellier'
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
    .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
    .setHTML('<h6>' + marker.properties.title + '</h6><p>' + marker.properties.description + '</p>'))
    .addTo(map);
});
</script>
</body>
</html>