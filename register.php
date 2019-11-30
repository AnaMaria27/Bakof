<?php
    require_once 'Usuario.php';
	$u = new Usuario;
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BAKOF TEC- Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form method="POST" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nome" class="form-control form-control-user" id="exampleFirstName" placeholder="Nome">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="cpf" class="form-control form-control-user" id="exampleLastName" placeholder="CPF">
                  </div>
				  <div class="col-sm-6">
                    <input type="text" name="nivel" class="form-control form-control-user" id="exampleLastName" placeholder="nivel de acesso">
                  </div>
                </div>
					 <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="cell" class="form-control form-control-user" id="exampleLastName" placeholder="Telefone">
                  </div>
                <div class="form-group row">
                 <div class="col-sm-6"> 
                    <input type="password" name="senha" class="form-control form-control-user" id="exampleInputPassword" placeholder="senha">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="csenha" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="confirme a senha">
                  </div>
                </div>
                <input type="submit" name="cadastra">
                <hr>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<?php
    if(isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $cpf = addslashes($_POST['cpf']);
		$nivel = addslashes($_POST['nivel']);
        $cell = addslashes($_POST['cell']);
        $senha = addslashes($_POST['senha']);
        $csenha = addslashes($_POST['csenha']);
    }

    if(!empty($nome) && !empty($cpf) && !empty($cell) && !empty($senha) && !empty($csenha)){
        $u->conectar("bakof","localhost","root","");
        if($senha == $csenha){
            if($u->cadastrar($nome, $cpf, $senha, $cell)){
                header("location: login.php");
            }else{
                ?>
					<div id="msg_e">
						CPF ja existente!
					</div>
				<?php
            }
        }else{
            ?>
				<div id="msg_e">
					senhas diferentes!
				</div>
			<?php
        }
    }
?>