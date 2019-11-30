<?php
    require_once 'Usuario.php';
	$u = new Usuario;
?>
<html>
<head>
</head>
<body>
    <form method="POST">
		<input type="text" name="cpf" placeholder="CPF" maxlength="14">
		<input type="password" name="senha" placeholder="Senha" maxlength="14">
		<input type="submit" value="logar">
	</form>
</body>
</html>
<?php
    if(isset($_POST['cpf'])){
        $cpf = addslashes($_POST['cpf']);
        $senha = addslashes($_POST['senha']);
    }

    if(!empty($cpf) && !empty($senha)){
        $u->conectar("bakof","localhost","root","");
        
          if($u->logar($cpf, $senha)){
                header("location: cadastro.php");
          }else{
             ?>
				<div id="msg_e">
					CPF ou senha incorreto!
				</div>
			<?php
        }
    }
?>