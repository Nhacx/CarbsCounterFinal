<?php

if(isset($_POST['entrar']))
{
	include_once('config.php');

	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	$query = "select email from usuario where email = '{$email}' and senha = md5('{$senha}')";
	$result = mysqli_query($conexao, $query);
	$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: land.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: loginpage.php');
	exit();
}
}

?>



<html lang="pt-br">

<head>
    <meta http-equiv= "Content-Type" content= "text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarbsCounter</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="stylelink.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js">
	</script>

<script>
function init() 
{		
	window.addEventListener('load', init);
}
</script>
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 navbar">
<img id="logo" src='img/logo5.png' height = '115px' width='135px' class="logo navbar-brand text-white offset-md-2"/> 
<ul class="nav">
<li class="nav-item active"><a href="#" class="nav-link">Login</a></li>
<li class="nav-item"> <a href="land.html" class="nav-link" target="_self"> Home </a></li>
<li class="nav-item"> <a href="artigos.html" class="nav-link" target="_self"> Sou diabético, e agora? </a></li> 
<li class="nav-item"><a href="tabela.html" class="nav-link" target="_self"> Tabela Nutricional</a></li>  
<li class="nav-item"><a href="sobrenos.html" target="_self" class="nav-link">Sobre nós</a></li> 
</ul>

</div>
</div>
</div>




</br>
</br>
</br>

<div class="container" >
    
<div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
      <form method="post" action="loginpage.php"> 
          <h1>Login</h1> 
      
	    <p> 
            <label for="email">E-mail</label>
            <input id="email" name="email" required="required" type="text" placeholder="pedrodepaula@gmail.com"/>
          </p>
           
          <p> 
            <label for="senha">Senha</label>
            <input id="senha" name="senha" required="required" type="password" placeholder="pedro1234" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" name="entrar" value="Entrar" /> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="registrousuario.php" target="_self">Cadastre-se</a>
          </p>
 
</form>

</div>
</div>
</div>

</main>

</br>
</br>

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