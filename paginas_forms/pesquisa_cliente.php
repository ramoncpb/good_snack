<?php
    require_once '../classes/class-cliente.php';
    $p = new Cliente("bd_gdsnack","localhost","root","");
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="img/favicon.png"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>GoodSnack's</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css" />
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </head>

    <header>
        <?php
            include_once '../funcao/cabecalhoNav.php';
        ?>
    </header>

    <body style="background-color:beige;">
        <div class="card" style="margin: 40px;">
        <div class="card-body">
            <table class="table table-dark">
                
                    <td>Nome</td>
                    <td>Sobrenome</td>
                    <td>E-mail</td>
                    <td>CPF</td>
                    <td>Data de Nascimento</td>
                    <td>Sexo</td>
                    <td>Telefone</td>
                    <td>CEP</td>
                    <td>Rua</td>
                    <td>Casa</td>
                    <td>Bairro</td>
                    <td>Estado</td>
                    <td>Cidade</td>
                    <td style="text-align: center">Ações</td>   

<?php
    $dados = $p->buscarDados();
    if(count($dados) > 0){//Se tem pessoas no banco
        for($i=0; $i< count($dados); $i++){
            echo "<tr>";
            foreach($dados[$i] as $key => $value){
                if($key != "id"){
                    echo"<td>".$value."</td>";
                }
            }
            ?><td> <a style="background-color:white; color:black; padding:5px; margin: 0px 5px; text-decoration: none" href="">Editar</a> <a style="background-color:white; color:black; padding:5px; margin: 0px 5px; text-decoration: none" href="">Excluir</a> </td><?php
            echo "</tr>";
        }
       
    }else{//O banco está vazio
        echo"Ainda não há pessoas cadastradas";
    }
    
?>
            </table>
        </div>
        </div>



        
    </body>

    <footer>
        <?php
            include_once '../funcao/rodape.php';
         ?>
    </footer>

</html>