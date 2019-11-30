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
	<?php
    ini_set('display_errors', 0 );
     error_reporting(0);

     include_once("conexao.php");  

    
   if(!isset($_SESSION)) session_start();

       header("Content-type: text/html;charset=utf-8");
       if(isset($_SESSION['email'] )) {
        $login = $_SESSION['email'] ; 
        
      }
       if(isset($_SESSION['idtipousu'])) {
         $idtipousu = $_SESSION['idtipousu']; 
      } elseif(isset($_SESSION['nome'])) {
         $login = $_SESSION['nome']; 
      } 
       $quer="SELECT * FROM usuario WHERE email like '$login'";
       
                                   $resulta=mysqli_query($dbc,$quer) or die ('Erro ao executar o comando SQL');
                                   while ($ro = mysqli_fetch_array($resulta)) { 
                                      $colaborador= $ro['colaborador']; 
                                    } 
        
        if ($idtipousu == 1) {
         include_once("menuprof.php");
        }elseif ($idtipousu == 2&& $colaborador != 2 ) {
          include_once("menualuno.php");
        }elseif ($idtipousu == 2 && $colaborador == 2 ) {
          include_once("menualunoc.php");
        }elseif ($login == 'Ana') {
          include_once("menuadm.php");
        }else{
          include_once("menu.html");
        }
    
      $idcont=$_GET['idcont'];
      
include_once("conexao.php");      $query="SELECT * FROM conteudo WHERE idcont ='$idcont'";
      $result=mysqli_query($dbc,$query) or die ('Erro ao esecutar o comando SQL');
      $row=mysqli_fetch_array($result);
      mysqli_close($dbc);

    ?>
   <h1>Alterar de Conteúdo</h1>
       <div class="row mb-3">   
    <div class="col-md-6"> 
    <form method="POST" action="alterando.php">
    <input type="hidden" name="idcont" value="<?php echo $row['idcont']; ?>">
     <div class="row mb-3">
    <div class="col-md-3"></div>
    <div class="col-md-6"> 
      <p class="font-weight-bold"><label for  = "titulo"> RECEBIMENTO:</label></p>
    </div></div>

   
       <input id="radio_1" name="categoria" type="radio" value="1"  > Entrega concluida<br>
   
    
           <input id="radio_2" name="categoria" type="radio" value="2" > Produto chegou quebrado<br>
      
    /div>
    <div class="col-md-6"> 
      <input id="radio_3" name="categoria" type="radio" value="3"  > Não foi solicidado<br>
     
       <input id="radio_4" name="categoria" type="radio" value="4" > Produto faltou<br> 
     
       <input id="radio_4" name="categoria" type="radio" value="5"> Endereço errado<br> 
     </div></div>
    <label for  = "titulo">Produtos que ocorram o problema:</label><br />
    <input type="checkbox" id= "nome" name= "nome" value="<?php echo $row['nome']; ?>"> <br />

    <label for="foto">Foto da mercadoria:</label> <br>
    <input type="file" name="foto"/> <br>
    <input type="submit" name="alterar" value="Alterar" />       <input type="reset" name="limpar" value="Limpar" /><br>
		</div></div>
		<a href="listarcont.php">Voltar</a>
		
    </form>
    <script src="node_modules/jquery/dist/jquery.js" crossorigin="anonymous"></script>
    <script src="node_modules/popper.js/dist/popper.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>

</body>

</html>