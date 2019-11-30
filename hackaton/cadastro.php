<?php
    require_once 'Usuario.php';
	$u = new Usuario;
?>
<html>
<head>

</head>
<body>
        <form method="POST">
			<input type="text" name="nome" placeholder="Nome" maxlength="150">
			<input type="text" name="cpf" placeholder="CPF" maxlength="14">
            <input type="text" name="cell" placeholder="Telefone" maxlength="15">
			<input type="password" name="senha" placeholder="Senha" maxlength="14">
			<input type="password" name="csenha" placeholder="Confirmar senha" maxlength="14">
			<input type="submit" value="Cadastrar-se">
		</form>
</body>
</html>

<?php
    if(isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $cpf = addslashes($_POST['cpf']);
        $cell = addslashes($_POST['cell']);
        $senha = addslashes($_POST['senha']);
        $csenha = addslashes($_POST['csenha']);
    }

    if(!empty($nome) && !empty($cpf) && !empty($senha) && !empty($csenha)){
        $u->conectar("bakof","localhost","root","");
        if($senha == $csenha){
            if($u->cadastrar($nome,$cpf,$senha)){
                ?>
				    <div id="msg_c">
					cadastrado com sucesso!
					</div>
				<?php
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