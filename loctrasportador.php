 <!DOCTYPE html>
<html>

<head>
	<title>Localização transportador</title>
	<meta charset "UTF-8" >
	<style>
	       #map-canvas{
			   width: 800px;
			   height: 600px;
			   background-color: yellow;
			  } 
	</style>
	<script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
	<script type="text/javascript">
var casaAna = new google.maps.LatLng(-27.479240, -53.168031);
function initialize() {
var mapOptions = {
center: casaAna,
zoom: 18,
mapTypeId: google.maps.MapTypeId.SATELLITE
};
var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
 var marcador=new google.maps.Marker({
	 position: casaAna,
	 map:map,
	 title:"Estou aqui"
 });
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>
</head>

<body>
	<h1> Localização do Trasportador!</h1>
	<div id="map-canvas"></div>
</body>

</html>
