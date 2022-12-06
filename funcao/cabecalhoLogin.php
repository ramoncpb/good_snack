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
    <a class="navbar-brand" href="#"><img class="logo" src='../img/GoodSnackNoMargin' height="40" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">

  

  
</nav>
  <div class="container-fluid" style="background-color:#393E46; height:45px">
  <div class="row">
    <div class="col">
      <output id="hora" style="margin-left:5%; margin-top:1%; color: #EEEEEE"></output>
    </div>
    <div class="col" style="margin:3px">
      <p style="text-align:center; margin-left:5%; margin-top:1%; color: #EEEEEE">Faça Login</p>
    </div>
    <div class="col" >
      <output id="data" style="margin-left: 80%; margin-top:1%; color:#EEEEEE"></output>
    </div>
  </div>
  </div>

  </html>