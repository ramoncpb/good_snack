<?php

    Class Cliente{
        //Funcoes
        private $pdo;
        //Conexão
        public function __construct($dbname, $host, $user, $pass)
        {
            try{
                $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$pass);
            } catch(PDOException $e){
                echo "Erro com banco de dados: ".$e->getMessage();
            }catch(Exception $e){
                echo "Erro Genérico: ".$e->getMessage();
            }
        }
        //Funcao busca dados e exibe na tela
        public function buscarDados(){
            $res = array();
            $cmd = $this->pdo->query("SELECT * FROM tb_cliente");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }

        //Funcao para cadastrar o cliente
        public function cadastrarCliente($fnome, $fsobr, $femail, $fcpf, $fnasc, $fsexo, $ftel, $fcep, $frua, $fnum, $fbairro, $fest, $fcid){
            $cmd = $this->pdo->query("SELECT fcpf from tb_cliente WHERE fcpf = fcpf");
            if($cmd->rowCount() > 0){//CLiente já cadastrado
                return false;
            }else{ //Cliente não cadastrado
                $cmd = $this->pdo->query("INSERT INTO tb_cliente (fnome, fsobr, femail, fcpf, fnasc, fsexo, ftel, fcep, frua, fnum, fbairro, fest, fcid) VALUES (:fnome, :fsobr, :femail, :fcpf, :fnasc, :fsexo, :ftel, :fcep, :frua, :fnum, :fbairro, :fest, :fcid)");
                    return true;
            }

        }

    }
?>