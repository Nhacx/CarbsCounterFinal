﻿<html lang="pt-br">

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
<li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
<li class="nav-item"> <a href="login.html" class="nav-link" target="_self"> Login </a></li>
<li class="nav-item"> <a href="artigos.html" class="nav-link" target="_self"> Sou diabético, e agora? </a></li> 
<li class="nav-item"><a href="tabela.html" class="nav-link" target="_self"> Tabela Nutricional</a></li>  
<li class="nav-item"><a href="sobrenos.html" target="_self" class="nav-link">Sobre nós</a></li> 
<li class="nav-item"><a href="diario.html" target="_self" class="nav-link">Diário Glicêmico</a></li>
<li class="nav-item"><a href="sair.php" target="_self" class="nav-link">Sair do Sistema</a></li>

</ul>

</div>
</div>
</div>

<?php


// Conexão com o banco de dados
require "config.php";

// Imprime mensagem de boas vindas
echo "<font color= \"white\" face=\"Verdana\" size=2>Bem-Vindo!<BR>\n";


// Imprime link de logout
//echo " | <a href=\"sair.php\">Sair do Sistema</a>";

//echo "<br><br>\n";

 

	?>



<div id="carousels" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
			    <li data-target="#carousels" data-slide-to="0" class="active"></li>
			    <li data-target="#carousels" data-slide-to="1"></li>
			    <li data-target="#carousels" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<div class="info">
			      		<h2>Tenha uma vida muito mais leve conosco!</h2>
			      		<p><a href="registro.html" target="_blank">Venha fazer parte da nossa família</a></p>
			      	</div>
			    </div>
			    <div class="carousel-item">
			    	<div class="info">
			      		<p><a href="oquee.html" target="_blank">Clique para saber mais</a></p>
			      	</div>
			    </div>
			    <div class="carousel-item">
			    	<div class="info">
			      		<p>Clique para saber mais</p>
			      	</div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carousels" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Anterior</span>
			  </a>
			  <a class="carousel-control-next" href="#carousels" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Próximo</span>
			  </a>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</br>
</br>

<div class="texto">

<div class="container">
<p id="p1">
Você tem interesse em conhecer mais sobre o diabetes? O CarbsCounter é a solução perfeita para você. Aqui você encontrará diversos tipos de apoio aos diabeticos e a interessados em saber mais sobre a doença.
<br>
O CarbsCounter conta com o apoio de farmácias da sua região, atraves do acesso a sua localização, você encontrará as drogarias com melhores preços e mais perto de sua casa.
<br>
Para um controle aproximado de glicose consumido pelo diabetico, o CarbsCounter disponibiliza uma tabela nutricional e um diário para que o usuário possa usar de apoio em consultas medidas e possa ter o proprio monitoramento de maneira acertiva e organizada. Além do mais, contamos com materiais de apoio para guiarem o usuário em busca de conhecimento sobre a diabetes.
</p>
</div>
</div>
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

