<?php
//++++++++++++++CONEXÃO COM O BANCO++++++++++++++
    try{
        $pdo = new PDO("mysql:dbname=bd_gdsnack;host=localhost","root","");
    } catch (PDOException $e) {
        echo "Erro com o banco de dados: ".$e->getMessage();
    }
    catch(Exception $e){
        echo "Erro genérico: ".$e->getMessage();;
    }
    //dbname //host //usuário e senha

//++++++++++++++INSERÇÃO DOS DADOS++++++++++++++

    //$pdo->query("INSERT INTO tb_cliente(fnome, fsobr, femail, fcpf, fnasc, fsexo, ftel, fcep, frua, fnum, fbairro, fest, fcid)VALUES('Ramon', 'Campos', 'ramonampos1802@gmail.com', '12334556789', '2000-03-12', 'M', '32991971685', '32443554', 'Gentil Correa', '345', 'Alfredo Lima', 'MG', 'Bicas')");

//++++++++++++++DELETAR E AJUSTAR++++++++++++++   
    //$res = $pdo->query("DELETE FROM tb_cliente WHERE fcpf = '12334556789'");

    //$res = $pdo->query("UPDATE tb_cliente SET fnome = 'Ramonzito' WHERE fcpf = '12334556789'");
//++++++++++++++SELECIONAR++++++++++++++

    $res = $pdo->query("SELECT * FROM tb_cliente WHERE fcpf = '12334556789'");
    $resultado = $res->fetch(PDO::FETCH_ASSOC);
    foreach($resultado as $key => $value){
        echo $key.": ".$value."</br>";
    }
    //fetchall para pegar todos os itens da tabela e trasforma-lo em array
?>