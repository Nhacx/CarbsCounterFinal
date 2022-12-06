<?php

include_once("cabecalho0.php");
include_once("footer.php");

?>
<html lang="pt-br">

<head>
    <meta http-equiv= "Content-Type" content= "text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarbsCounter</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="stylepags.css"/>
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
</br>
</br>
</br> 

<div class="container" >
    
<div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
      <form method="post" action="validacao_login.php"> 
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

</body>
</html>