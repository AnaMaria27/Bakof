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
    public function cadastrarCliente($nome, $usuario, $senha, $cpf){
		global $pdo;
		$sql = $pdo->prepare("SELECT id FROM usuario WHERE usuario = :e OR cpf = :t");
        $sql->bindvalue(":e",$usuario);
        $sql->bindvalue(":t",$cpf);
		$sql->execute();
        
		if($sql->rowCount() > 0){
			return false;
		}else{
            
			$sql = $pdo->prepare("INSERT INTO usuario (nome, usu, senha, cpf) VALUE(:n, :u, :s, :d)");
			$sql->bindvalue(":n",$nome);
			$sql->bindvalue(":s",password_hash($senha, PASSWORD_DEFAULT));
            $sql->bindvalue(":u",$usuario);
            $sql->bindvalue(":d",$cpf);
			$sql->execute();
			
			return true;
		}
		
	}
	public function logar($cpf, $senha){
        global $pdo;
        $sql = $pdo->prepare("SELECT senha FROM usuario WHERE cpf = :e");
        $sql->bindvalue(":e",$cpf);
        $sql->execute();
        
        $dado = $sql->fetch();
        
        $senhabd = $dado['senha'];
        
        if(password_verify($senha, $senhabd)){
            $_SESSION['id'] = $dado['id'];
            return true;
        }

	}

    public function cadastroproduto($nome, $descricao, $qnt){
        global $pdo;
        
        $sql = $pdo->prepare("INSERT INTO produtos (nome, descricao, qnt) VALUE(:n, :d, :q)");
        $sql->bindvalue(":n", $nome);
        $sql->bindvalue(":d", $descricao);
        $sql->bindvalue(":q", $qnt);
        $sql->execute();
    }
}
?>