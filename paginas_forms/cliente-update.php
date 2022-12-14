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
    <?php
    
        //VERIFICAÇÃO SE CLICOU PARA PARA REALIZAR O UPDATE
        if(isset($_GET['fcpf_update'])){
            $fcpf_update = addslashes($_GET['fcpf_update']);
            $res = $p->buscarDadosCliente($fcpf_update);

            $cpf_upd = addslashes($_GET['fcpf_update']);
            $fnome = addslashes($_POST['fnome']);
            $fsobr = addslashes($_POST['fsobr']);
            $femail = addslashes($_POST['femail']);
            $fcpf = addslashes($_POST['fcpf']);
            $fnasc = addslashes($_POST['fnasc']);
            $fsexo = addslashes($_POST['fsexo']);
            $ftel = addslashes($_POST['ftel']);
            $fcep = addslashes($_POST['fcep']);
            $frua = addslashes($_POST['frua']);
            $fnum = addslashes($_POST['fnum']);
            $fbairro = addslashes($_POST['fbairro']);
            $fest = addslashes($_POST['fest']);
            $fcid= addslashes($_POST['fcid']);
            if (!empty($fnome) && !empty($fsobr) && !empty($femail) && !empty($fcpf) && !empty($fnasc) && !empty($ftel) && !empty($fcep) && !empty($frua) && !empty($fnum) && !empty($fbairro )){
                //Cadastro do cliente
                $p->atualizarCliente($fnome, $fsobr, $femail, $fcpf, $fnasc, $fsexo, $ftel, $fcep, $frua, $fnum, $fbairro, $fest, $fcid);
                ?>
                <script>
                    window.location.href="pesquisa_cliente.php"
                </script>
                <?php
            }

        }
    ?>
        <div class="card" style="margin: 40px;">
        <div class="card-body">
            <form method="POST">
                <label for="fnome">Nome:</label><br>
                <input type="text" id="fnome" name="fnome" placeholder="Nome" value="<?php if(isset($res)){echo $res['fnome'];}?>" required ><br>

                <label for="fsobr">Sobrenome:</label><br>
                <input type="text" id="fsobr" name="fsobr" placeholder="Sobrenome" value="<?php if(isset($res)){echo $res['fsobr'];}?>" required ><br>

                <label for="femail">E-mail:</label><br>
                <input type="text" id="femail" name="femail" placeholder="E-mail" value="<?php if(isset($res)){echo $res['femail'];}?>" required ><br>

                <label for="fcpf">CPF:</label><br>
                <input type="text" id="fcpf" name="fcpf" placeholder="xxx.xxx.xxx-xx" value="<?php if(isset($res)){echo $res['fcpf'];}?>" required ><br>

                <label for="fnasc">Data de Nascimento:</label><br>
                <input type="date" id="fnasc" name="fnasc" value="<?php if(isset($res)){echo $res['fnasc'];}?>" required ><br>

                <input type="radio" id="fsexo" name="fsexo" value="<?php if(isset($res)){echo $res['fsexo'];}?>">
                <label for="Mas">Masculino</label>
                <input type="radio" id="fsexo" name="fsexo" value="<?php if(isset($res)){echo $res['fsexo'];}?>">
                <label for="Fem">Feminino</label>
                <input type="radio" id="fsexo" name="fsexo" value="<?php if(isset($res)){echo $res['fsexo'];}?>">
                <label for="Out">Outro</label><br>

                <label for="ftel">Telefone:</label><br>
                <input type="tel" id="ftel" name="ftel" placeholder="(xx)xxxxx-xxxx" value="<?php if(isset($res)){echo $res['ftel'];}?>" required ><br>
            
                <label for="fcep">CEP:</label><br>
                <input type="text" id="fcep" name="fcep" placeholder="xxxxx-xxx" value="<?php if(isset($res)){echo $res['fcep'];}?>" required ><br>

                <label for="frua">Rua:</label><br>
                <input type="text" id="frua" name="frua" placeholder="R.Nome da Rua" value="<?php if(isset($res)){echo $res['frua'];}?>" required ><br>

                <label for="fnum">Número:</label><br>
                <input type="text" id="fnum" name="fnum" placeholder="Num e complemento" value="<?php if(isset($res)){echo $res['fnum'];}?>" required ><br>

                <label for="fbairro">Bairro:</label><br>
                <input type="text" id="fbairro" name="fbairro" placeholder="Nome do bairro" value="<?php if(isset($res)){echo $res['fbairro'];}?>" required ><br>

                <label for="fest">Estado:</label><br>
                <input type="text" id="fest" name="fest" placeholder="Estado" value="<?php if(isset($res)){echo $res['fest'];}?>"><br>

                <label for="fcid">Cidade:</label><br>
                <input type="text" id="fcid" name="fcid" placeholder="Cidade" value="<?php if(isset($res)){echo $res['fcid'];}?>"><br>


                <div><br>
                <button class="btn btn-dark" type="submit" value="Atualizar"> Atualizar</button>
                </div>

            </form>
        </div>
        </div>
        


        
    </body>

    <footer>
        <?php
            include_once '../funcao/rodape.php';
         ?>
    </footer>

</html>