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
                <label for="pnome">Nome:</label><br>
                <input type="text" id="pnome" name="pnome" placeholder="Nome do produto"><br>

                <label for="pcode">Código:</label><br>
                <input type="text" id="pcode" name="pcode" placeholder="Codigo do produto"><br>

                <label for="pcusto">Custo:</label><br>
                <input type="text" id="pcusto" name="pcusto" placeholder="Custo do Produto"><br>

                <label for="pval">Preço:</label><br>
                <input type="text" id="pval" name="pval" placeholder="Valor do produto"><br>

                <label for="ptipo">Tipo:</label><br>
                <select name="ptipo">
                    <option value="Comida">Comida</option>
                    <option value="Bebida">Bebida</option>
                </select><br>

                <label for="pestoque">Estoque:</label><br>
                <input type="text" id="pestoque" name="pestoque" placeholder="Qtd.Produtos"><br>

                <label for="pmarca">Marca:</label><br>
                <input type="text" id="pmarca" name="pmarca" placeholder="Marca do produto"><br>

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