<?php
    require_once 'Usuario.php';
	$u = new Usuario;
?>
<html>
<body>
    <form method="POST">
		<input type="text" name="nome" placeholder="Nome" maxlength="25">
        <input type="text" name="descricao" placeholder="Descrição">
		<input type="text" name="qnt" placeholder="Quantidade" maxlength="14">
		<input type="submit" value="Cadastrar">
	</form>
</body>
</html>
<?php
    if(isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $descricao = addslashes($_POST['descricao']);
        $qnt = addslashes($_POST['qnt']);
    }
    $u->conectar("bakof","localhost","root","");
    if(!empty($nome) && !empty($descricao) && !empty($qnt)){
        $u->cadastroproduto($nome, $descricao, $qnt);
    }
?>