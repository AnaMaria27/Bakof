<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastrar Conteúdo</title>
<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css" >
 <script src = "https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=hpers0v9vh9tmekmq9qowbaaomn6xfxgm3raovemxlzty9ir"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>

<body>
  
 <i class="fa fa-paper-plane text-primay" aria-hidden="true"></i> Cadastro de produtos
  <form action="addproduto.php" method="post" enctype="multipart/form-data" name="cadastro" >
   
   
  
      <label for  = "titulo"> Produto:</label></p>
      <input type="text" class="form-control" id= "produto" name= "produto"> <br />

      <div class="form-grup col-sm-12 ">
        <label for  = "titulo"> Corpo do conteúdo:</label></p>
       <textarea class="form-control" name="corpocont"  placeholder="Texto" rows="8"></textarea>

     <label for  = "titulo"> Coloque aqui a sua localização:</label></p>
      <input type="file" class="form-control" name="foto" /><br />
    
    
  <style>
         #map-canvas{
         width: 800px;
         height: 600px;
         background-color: yellow;
        } 
  </style>
  <script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
  <script type="text/javascript">

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
   title:"Minha Casa"
 });
}
google.maps.event.addDomListener(window, 'load', initialize);



    <input type="submit" class="btn btn-warning " name="cadastrar" value="Cadastrar">       
      <input type="reset" class="btn btn-warning" name="limpar" value="Limpar"><br>
</div></div></div>


    
</form>


</body>
</html>