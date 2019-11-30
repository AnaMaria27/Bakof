<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar Conteúdo</title>
<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css" >
 <script src = "https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=AIzaSyADLsL46CQaEu2smB3EMpEV1eEbInd0ASs&callback"></script>

</head>

<body>
  
<!DOCTYPE html>
<html>

<head>
  <title>Minha Casa!!</title>
  <meta charset "UTF-8" >
  <style>
         #map-canvas{
         width: 800px;
         height: 600px;
         background-color: yellow;
        } 
  </style>
   <script src='https://maps.googleapis.com/maps/api/js' type='text/javascript'></script>
  <script type='text/javascript'>
  <?php

  $dbc = mysqli_connect('localhost', 'root', '', 'bakof') or die ('Erro ao conectar ao servidor MySQL');
    $quer="SELECT longitude, latitude FROM entregas ";
    $quer= mysqli_query($dbc, $quer);
    echo "var pontos = [";
    while ($row = mysqli_fetch_array($quer)) { 
   
      echo "
     new google.maps.LatLng(".$row['longitude'] .",". $row['latitude'] ."),";
          
         
      };
      echo "]";
  ?>
 

  
  
function initialize() {
var mapOptions = {
center: pontos[0],
zoom: 18,
mapTypeId: google.maps.MapTypeId.SATELLITE
};
var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 var marcador=new google.maps.Marker({
   position: pontos[0],
   map:map,
   title:'Eu estou aqui'
 });
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>
</head>

<body>
  <h1> Frete Nacional</h1>
  <div id='map-canvas'></div>
</body>

</html>

    



</body>
</html>