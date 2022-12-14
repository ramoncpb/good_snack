<?php
Class Usuario {
    private $pdo;
    public $msgErro = "";
    public function __construct($nome, $host, $usuario, $senha){
        global $pdo;
        global $msgErro;

        try{
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        }catch(PDOException $e){
            $msgErro = $e->getMessage();
        }

    }

    public function cadastrar($uusuario, $unome, $usenha){
        global $pdo;
        //Verificar se já existe o usuário
        $sql = $pdo->query("SELECT * FROM tb_usuario WHERE uusuario = '$uusuario'");
        $verifica = $sql->rowCount();
        if($verifica > 0){
            return false;//Já cadastrada
        }else{
            //Caso não, Cadastrar.
            $sql = $pdo->query("INSERT INTO tb_usuario (uusuario, unome, usenha) VALUES ('$uusuario', '$unome', md5('$usenha'))");
            return true;
        }
        
    }

    public function logar($uusuario, $usenha){
        global $pdo;
        //Verificar se está cadastrado
        $sql = $pdo->query("SELECT * FROM tb_usuario WHERE uusuario = '$uusuario' AND usenha = md5('$usenha')");
        if($sql->rowCount() > 0){
            //Entrar no sistema
            $dado = $sql->fetch();
            session_start();
            $_SESSION['uusuario'] = $dado['uusuario'];
            return true; //Cadastrado e logado com sucesso
        }else{
        
            return false;//Não cadastrado e logado
        }
    }
}
?>