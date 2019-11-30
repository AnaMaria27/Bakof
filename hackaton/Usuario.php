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
	public function cadastrar($nome, $cpf, $senha){
		global $pdo;
		$sql = $pdo->prepare("SELECT id FROM usuario WHERE CPF = :e");
        $sql->bindvalue(":e",$cpf);
		$sql->execute();
        
		if($sql->rowCount() > 0){
			return false;
		}else{
            
			$sql = $pdo->prepare("INSERT INTO usuario (nome, cpf, senha, codigo) VALUE(:n, :c, :s, :d)");
			$sql->bindvalue(":n",$nome);
			$sql->bindvalue(":s",password_hash($senha, PASSWORD_DEFAULT));
            $sql->bindvalue(":c",$cpf);
            $sql->bindvalue(":d",geraCod());
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
    
    /*public function geraCod(){
        $string = "0123456789abcdefghijklmnopqrstuvxwyz";
        $st = "";
        for($i = 0; $i < 6; $i++){
            $x = rand(0 , 35);
            $c = substr($string , $x, $x);
            $st .= $c;
        }
        return $st;
    }*/

}
?>