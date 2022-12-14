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
                    <label for="InputUser" class="form-label">Usuário</label>
                    <input type="text" name="uusuario" class="form-control" id="InputUser" aria-describedby="userHelp" minlength="6" maxlength="6" required> 
                    <div id="userHelp" class="form-text">Código de usuário</div>
                </div>
                <div class="mb-3">
                    <label for="InputName" class="form-label">Nome</label>
                    <input type="text" name="unome" class="form-control" id="InputName" aria-describedby="userHelp" maxlength="30" required>
                    <div id="userHelp" class="form-text">Seu nome </div>
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label">Senha</label>
                    <input type="password" name="usenha" class="form-control" id="InputPassword" maxlength="32" required>
                    <div id="userHelp" class="form-text">Sua senha</div>
                </div>
                <div class="mb-3">
                    <label for="InputPassword1" class="form-label">Senha</label>
                    <input type="password" name="uconfsenha" class="form-control" id="InputPassword1" maxlength="32" required>
                    <div id="userHelp" class="form-text">Confirmar senha</div>
                </div>

                <input type="submit" class="btn btn-dark" style="margin-top:10px;" value="Cadastrar">
            </form>
        </div>
    </div>

</body>

<?php
    //verificar se clicou no botão cadastrar
    if(isset($_POST['uusuario'])){

        $uusuario = addslashes($_POST['uusuario']);
        $unome = addslashes($_POST['unome']);
        $usenha = addslashes($_POST['usenha']);
        $uconfsenha = addslashes($_POST['uconfsenha']);
         if(!empty($uusuario) && !empty($unome) && !empty($usenha) && !empty($uconfsenha)){
            if($u->msgErro == ""){//Sem erros
                if($usenha == $uconfsenha){
                    if($u->cadastrar($uusuario, $unome, $usenha)){
                        echo"Cadastrado com sucesso";
                    }else{
                        echo "Usuário já cadastrado";
                    };
            }else{
                echo"Senha e confirmar senha não correspondem!";
            }}else{
                echo "Erro: ".$u->msgErro;
            }
         }else{
            echo "Preencha todos os campos!";
         }
    }
?>

<footer>
    <?php
    include_once '../funcao/rodape.php';
    ?>
</footer>

</html>