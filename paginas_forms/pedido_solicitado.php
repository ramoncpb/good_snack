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
        <form>
                <label for="dcod">Codigo do Pedido:</label><br>
                <input type="text" id="dcod" name="dcod" placeholder="Código"><br>  
                
                <label for="fcpf">CPF:</label><br>
                <input type="text" id="fcpf" name="fcpf" placeholder="xxx.xxx.xxx-xx"><br>

                <label for="fnome">Nome do Cliente:</label><br>
                <input type="text" id="fnome" name="fnome" placeholder="Nome"><br>

                <label for="fsobr">Sobrenome do Cliente:</label><br>
                <input type="text" id="fsobr" name="fsobr" placeholder="Sobrenome"><br>

                <label for="fnasc">Data de Nascimento:</label><br>
                <input type="date" id="fnasc" name="fnasc"><br>

                <label for="ftel">Telefone:</label><br>
                <input type="tel" id="ftel" name="ftel" placeholder="(xx)xxxxx-xxxx"><br>

                <label for="fcep">CEP:</label><br>
                <input type="text" id="fcep" name="fcep" placeholder="xxxxx-xxx"><br>

                <label for="frua">Rua:</label><br>
                <input type="text" id="frua" name="frua" placeholder="R.Nome da Rua"><br>

                <label for="fnum">Número:</label><br>
                <input type="text" id="fnum" name="fnum" placeholder="Num e complemento"><br>

                <label for="fbairro">Bairro:</label><br>
                <input type="text" id="fbairro" name="fbairro" placeholder="Nome do bairro"><br>

                <label for="fest">Estado:</label><br>
                <input type="text" id="fest" name="fest" placeholder="Estado"><br>

                <label for="fcid">Cidade:</label><br>
                <input type="text" id="fcid" name="fcid" placeholder="Cidade"><br>

                <label for="pnome">Pedido:</label><br>
                <input type="text" id="pnome" name="pnome" placeholder="Nome do produto"><br>

                <label for="pval">Preço:</label><br>
                <input type="text" id="pval" name="pval" placeholder="Valor do produto"><br>

                <label for="ptotal">Total:</label><br>
                <input type="text" id="ptotal" name="ptotal" placeholder="Valor total do pedido"><br>

                <label for="ppag">Pagamento:</label><br>
                <select name="ppag">
                    <option value="Cartao">Maquininha</option>
                    <option value="Dinheiro">Dinheiro</option>
                    <option value="Pix">Pix</option>
                </select><br>

                <div><br>
                    <button class="btn btn-dark" type="submit"> Cadastrar</button>
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