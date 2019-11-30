  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar Conteúdo</title>
<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css" >
 <script src = "https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=hpers0v9vh9tmekmq9qowbaaomn6xfxgm3raovemxlzty9ir"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
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
  <?php
  $usuario=$_GET['idusuario'];
  $dbc = mysqli_connect('localhost', 'root', '', 'tcc') or die ('Erro ao conectar ao servidor MySQL');
    $quer="SELECT logitude, latitude FROM entregas WHERE idusuario=$idusuario";
       
  echo "<script src='https://maps.googleapis.com/maps/api/js' type='text/javascript'></script>
  <script type='text/javascript'>";

  while ($row = mysqli_fetch_array($result)) { 
   echo "var latitude= ". $row['latitude'];
      echo "var longetude= ". $row['longetude']; 
      echo"var verfrete = new google.maps.LatLng(latitude, longetude)";

        
       
    }; echo "
function initialize() {
var mapOptions = {
center: verfrete,
zoom: 18,
mapTypeId: google.maps.MapTypeId.SATELLITE
};
var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 var marcador=new google.maps.Marker({
   position: verfrete,
   map:map,
   title:'Eu estou aqui'
 });
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>
</head>

<body>
  <h1> Frete Nacional</h1>
  <div id='map-canvas'></div>";
  ?>
</body>

</html>

    


<script src="node_modules/jquery/dist/jquery.js" crossorigin="anonymous"></script>
    <script src="node_modules/popper.js/dist/popper.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>
</body>
</html>