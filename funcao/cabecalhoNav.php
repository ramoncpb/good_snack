<html>
  <head>
  <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
		<script type="text/javascript">
			jQuery(window).load(function($){
				atualizaRelogio();
			});
		</script>

<script>
		function atualizaRelogio(){ 
			var momentoAtual = new Date();
			
			var vhora = momentoAtual.getHours();
			var vminuto = momentoAtual.getMinutes();
			var vsegundo = momentoAtual.getSeconds();
			
			var vdia = momentoAtual.getDate();
			var vmes = momentoAtual.getMonth() + 1;
			var vano = momentoAtual.getFullYear();
			
			if (vdia < 10){ vdia = "0" + vdia;}
			if (vmes < 10){ vmes = "0" + vmes;}
			if (vhora < 10){ vhora = "0" + vhora;}
			if (vminuto < 10){ vminuto = "0" + vminuto;}
			if (vsegundo < 10){ vsegundo = "0" + vsegundo;}

			dataFormat = vdia + " / " + vmes + " / " + vano;
			horaFormat = vhora + " : " + vminuto + " : " + vsegundo;

			document.getElementById("data").innerHTML = dataFormat;
			document.getElementById("hora").innerHTML = horaFormat;

			setTimeout("atualizaRelogio()",1000);
		}
	</script>

  </head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../paginas_forms/pagina_inicial.php"><img class="logo" src='../img/GoodSnackNoMargin' height="40" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="novo_cliente.php">Novo Cliente</a></li>
            <li><a class="dropdown-item" href="pesquisa_cliente.php">Meus Clientes</a></li>
            
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pedidos
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="pedido_solicitado.php">Solicitação de Pedidos</a></li>
            <li><a class="dropdown-item" href="pedido_entregue.php">Pedidos Entregues</a></li>
            <li><a class="dropdown-item" href="pedido_cancelado.php">Pedidos Cancelados</a></li>
            <li><a class="dropdown-item" href="pesquisa_pedido.php">Pedidos Solicitados</a></li>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="novo_produto.php">Novo Produto</a></li>
            <li><a class="dropdown-item" href="pesquisa_produto.php">Meus Produtos</a></li>
            
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav">
          <a class="nav-link" href="login.php" role="button" aria-expanded="false">
            Login
          </a>
      </ul>
    </div>
  </div>
  
</nav>
  <div class="container-fluid" style="background-color:#393E46; height:45px">
  <div class="row">
    <div class="col">
      <output id="hora" style="margin-left:5%; margin-top:1%; color: #EEEEEE"></output>
    </div>
    <div class="col" style="margin:3px">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-dark" style="border-color:#EEEEEE" type="submit">🔍</button>
      </form>
    </div>
    <div class="col" >
      <output id="data" style="margin-left: 80%; margin-top:1%; color:#EEEEEE"></output>
    </div>
  </div>
  </div>

  </html>