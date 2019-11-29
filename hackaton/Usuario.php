<?php

class Usuario{
	private $pdo;
	public $msgErro;
	public function conectar($nome, $host, $usuario, $senha){
		global $pdo;
		global $msgErro;
		try{
		$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
		} catch (PDOException $e){
			$msgErro = $e->getMessage();
		}
	}
	public function cadastrar($nome, $senha, $cpf, $veiculo){
		global $pdo;
		$sql = $pdo->prepare("SELECT id FROM usuario WHERE CPF = :e");
        $sql->bindvalue(":e",$cpf);
		$sql->execute();
        
		if($sql->rowCount() > 0){
			return false;
		}else{
            $b = true;
            

			$sql = $pdo->prepare("INSERT INTO usuario (nome, cpf, senha) VALUE(:n, :c, :s)");
			$sql->bindvalue(":n",$nome);
			$sql->bindvalue(":s",password_hash($senha, PASSWORD_DEFAULT));
			$sql->bindvalue(":c",$cpf);
			$sql->execute();
			
			return true;
		}
		
	}
	public function logar($id, $senha){
		global $pdo;
		
		$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :u");
		$sql->bindvalue(":u",$usuario);
		$sql->execute();
		
		$dado = $sql->fetch();
		
		if($dado['usuario'] == $usuario){
			if(password_verify($senha, $dado['senha'])){
				session_start();
				$_SESSION['id'] = $dado['id'];
			return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
		
	}
    
}
?>