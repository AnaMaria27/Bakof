<!DOCTYPE html>
<html>

<head>
	<title>Alterar Conteudo</title>
	<meta charset="utf-8" >
	 <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css" > 
    <script src = "https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=hpers0v9vh9tmekmq9qowbaaomn6xfxgm3raovemxlzty9ir"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>

<body>
	

    
     
    
   <h1>Alterar de Conteúdo</h1>
       <div class="row mb-3">   
    <div class="col-md-6"> 
    <form enctype="multipart/form-data"  method="POST" action="cadastrardev.php">
   
     <div class="row mb-3">
    <div class="col-md-3"></div>
    <div class="col-md-6"> 
      <p class="font-weight-bold">
	  <label for  = "titulo">Cliente:</label><br />
    <input type="text" id= "nome" name= "nome"  <br />
	  <label for  = "titulo"> <br> RECEBIMENTO:</label></p>
    </div></div>

   
       <input id="radio_1" name="falha" type="checkbox" value="1"  > Entrega concluida<br>
   
    
           <input id="radio_2" name="falha" type="checkbox" value="2" > Produto chegou quebrado<br>
      
    
    <div class="col-md-6"> 
      <input id="radio_3" name="falha" type="checkbox" value="3"  > Não foi solicidado<br>
     
       <input id="radio_4" name="falha" type="checkbox" value="4" > Produto faltou<br> 
     
       <input id="radio_4" name="falha" type="checkbox" value="5"> Endereço errado<br> 
     </div></div>
    <label for  = "titulo">Produtos que ocorram o problema:</label><br />
    <input type="text" id= "prod" name= "produto"> <br />

    <label for="foto">Foto da mercadoria:</label> <br>
    <input type="file" name="foto"/> <br>
    <input type="submit" name="alterar" value="Alterar" />       <input type="reset" name="limpar" value="Limpar" /><br>
		</div></div>
		
		
    </form>
    <script src="node_modules/jquery/dist/jquery.js" crossorigin="anonymous"></script>
    <script src="node_modules/popper.js/dist/popper.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>

</body>

</html>
