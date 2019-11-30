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
	public function cadastrar($nome, $cpf, $senha, $telefone){
		global $pdo;
		$sql = $pdo->prepare("SELECT id FROM usuario WHERE cpf = :e");
        $sql->bindvalue(":e",$cpf);
		$sql->execute();
        
		if($sql->rowCount() > 0){
			return false;
		}else{
            
			$sql = $pdo->prepare("INSERT INTO usuario (nome, cpf, senha, telefone) VALUE(:n, :c, :s, :t)");
			$sql->bindvalue(":n",$nome);
			$sql->bindvalue(":s",password_hash($senha, PASSWORD_DEFAULT));
            $sql->bindvalue(":c",$cpf);
            $sql->bindvalue(":t",$telefone);
			$sql->execute();
			
			return true;
		}
		
    }
    public function cadastrarCliente($nome, $usuario, $senha){
		global $pdo;
		$sql = $pdo->prepare("SELECT id FROM usuario WHERE usuario = :e");
        $sql->bindvalue(":e",$usuario);
		$sql->execute();
        
		if($sql->rowCount() > 0){
			return false;
		}else{
            
			$sql = $pdo->prepare("INSERT INTO usuario (nome, usu, senha) VALUE(:n, :u, :s)");
			$sql->bindvalue(":n",$nome);
			$sql->bindvalue(":s",password_hash($senha, PASSWORD_DEFAULT));
            $sql->bindvalue(":u",$usuario);
			$sql->execute();
			
			return true;
		}
		
	}
	public function logar($usuario, $senha){
		global $pdo;
		
		$sql = $pdo->prepare("SELECT * FROM usuarios WHERE cpf = :u");
		$sql->bindvalue(":u",$usuario);
		$sql->execute();
		
		$dado = $sql->fetch();
		echo($dado['cpf']);
		if($dado['cpf'] == $usuario){
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