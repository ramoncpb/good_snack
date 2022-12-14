<?php
    require_once'../classes/class-usuario.php';
    $u = new Usuario("bd_gdsnack","localhost","root","");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>GoodSnack's</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../funcao/loading.js"></script>

</head>

<header>
    <?php
    include_once '../funcao/cabecalhoLogin.php';
    ?>
</header>

<body style="background-color:beige;">
    <div class="card" style="margin: 40px;">
        <div class="card-body">
            <form class="mx-auto" method="POST">
                <div class="mb-3">
                    <label for="exampleInputUser" class="form-label">Usuário</label>
                    <input type="text" name="uusuario" class="form-control" id="exampleInputUser" aria-describedby="userHelp" minlength="6" maxlength="6">
                    <div id="userHelp" class="form-text">Entre com o seu nome de usuário</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" name="usenha" class="form-control" id="exampleInputPassword1" maxlength="32">
                    <div id="userHelp" class="form-text">Entre com a senha referente ao usuário</div>
                </div>
                <div>
                    <a href="novo_usuario.php"><strong>Cadastrar Usuário</strong></a>
                </div>
                <input type="submit" class="btn btn-dark" style="margin-top:10px;" value="Entrar">
            </form>
        </div>
    </div>

    <?php
    //verificar se clicou no botão entrar
    if(isset($_POST['uusuario'])){

        $uusuario = addslashes($_POST['uusuario']);
        $usenha = addslashes($_POST['usenha']);
         if(!empty($uusuario) && !empty($usenha)){
            
            $u->logar($uusuario, $usenha);
                
        }else{
            echo "E-mail e/ou senha incorreto";
            //modal bootstrap
        }
         
    }
?>


</body>

<footer>
    <?php
    include_once '../funcao/rodape.php';
    ?>
</footer>

</html>