﻿<?php
    session_start();
    if(isset($_SESSION["autenticado"]))
    {
        header("Location: diario.html");
    }

  $email_cookie = $_COOKIE['login'];
    if(isset($email_cookie)){
      echo"Bem-Vindo, $email_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
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
<li class="nav-item active"><a href="#" class="nav-link">Diário Glicêmico</a></li>
<li class="nav-item"><a href="land.html" target="_self" class="nav-link">Home</a></li>
<li class="nav-item"> <a href="artigos.html" class="nav-link" target="_self"> Sou diabético, e agora? </a></li> 
<li class="nav-item"><a href="tabela1.php" class="nav-link" target="_self"> Tabela Nutricional</a></li>  
<li class="nav-item"><a href="sobrenos.html" target="_self" class="nav-link">Sobre nós</a></li> 
<li class="nav-item"><a href="sair.php" target="_self" class="nav-link">Sair do Sistema</a></li>
</ul>

</div>
</div>
</div>

</br>
</br>
</br>

<div class="container">
<p id="p1"> 

<h4> Diário Glicêmico </h4>



</p>

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