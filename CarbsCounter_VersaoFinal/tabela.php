<?php
    session_start();
    if(!isset($_SESSION["autenticado"]))
    {
        header("Location: tabela1.php");
    }
?>  
<html lang="pt-br">

<head>
    <meta http-equiv= "Content-Type" content= "text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarbsCounter</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="style3.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js">
</script>
</head>

<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-12 navbar">
<img id="logo" src='img/logo5.png' height = '115px' width='135px' class="logo navbar-brand text-white offset-md-2"/> 
<ul class="nav">
<li class="nav-item active"><a href="#" class="nav-link">Tabela Nutricional</a></li>
<li class="nav-item"> <a href="land.html" class="nav-link" target="_self"> Home </a></li>
<li class="nav-item"> <a href="loginpage.html" class="nav-link" target="_self"> Login </a></li>
<li class="nav-item"> <a href="artigos.html" class="nav-link" target="_self"> Sou diabético, e agora? </a></li> 
<li class="nav-item"><a href="sobrenos.html" target="_self" class="nav-link">Sobre nós</a></li> 
<li class="nav-item"><a href="tabela.php" target="_self" class="nav-link">Tabela Nutricional</a></li>
</ul>

</div>
</div>
</div>
</br>
</br>
</br>
<div class="container">
<p id="p1"> 

<h4> Tabela Nutricional </h4>

<?php

include_once('config.php');

$dados = mysql_query("SELECT * FROM tabelanutricional");
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);

	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p><?=$linha['nome']?> | <?=$linha['porcao']?> | <?=$linha['calorias']?> | <?=$linha['carboidratos']?> | <?=$linha['indiceglicemico']?> | <?=$linha['cargaglicemica']?></p>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if
	}

?>
</div>


</br>
</br>
</br>
</br>
</br>
</br>

</main>

<footer class="rodape">
        <ul class="icones">
            <li><a href="https://github.com/BeatrizTrindade073/CarbsCounter" target="_blank"><img src="img/facebook.png" height = '20px' width='20px' alt="Icone do Facebook"></a></li>
            <li><a href="https://github.com/BeatrizTrindade073/CarbsCounter" target="_blank"><img src="img/gmail.png" height = '20px' width='20px' alt="Icone do Gmail"></a></li>
            <li><a href="https://github.com/BeatrizTrindade073/CarbsCounter" target="_blank"><img src="img/github.png" height = '20px' width='20px' alt="Icone do GitHub"></a></li>
        </ul>
        &copy; Carbs Counter 2022
 

        </footer>

</body>
</html>