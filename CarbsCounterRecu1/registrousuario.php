<?php

if(isset($_POST['cadastrar']))
{
	include_once('config.php');

	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
  $nascimento = $_POST['nascimento'];
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
  if(isset($_POST['diabetes1']))
  {
    $tipo_diabetes = $_POST['diabetes1'];
  }
	else if(isset($_POST['diabetes2']))
  {
    $tipo_diabetes = $_POST['diabetes2'];
  }
	else if(isset($_POST['diabetesgestacional']))
  {
    $tipo_diabetes = $_POST['diabetesgestacional'];
  }
  else if(isset($_POST['diabeteslada']))
  {
    $tipo_diabetes = $_POST['diabeteslada'];
  }
  else if(isset($_POST['diabetesmody']))
  {
    $tipo_diabetes = $_POST['diabetesmody'];
  }
	$result = mysqli_query($conexao, "INSERT INTO usuarios(cpf, nome, nascimento, peso, altura, email, senha,  tipo_diabetes) VALUES ('$cpf', '$nome', '$nascimento', '$peso',  '$altura', '$email', '$senha', '$tipo_diabetes')");
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

<a class="links" id="paracadastro"></a>

<a class="links" id="paralogin"></a>

<div class="content">  
 <!--FORMULÁRIO DE CADASTRO-->
 <div id="cadastro">
 <form method="post" action="registrousuario.php"> 
          <h1>Cadastro</h1> 
           
 	<p> 

   	    <label for="cpf">CPF</label>
            <input id="cpf" name="cpf" required="required" type="text" placeholder="Pedro de Paula" />
          </p>
          <p> 

   	    <label for="nome">Nome</label>
            <input id="nome" name="nome" required="required" type="text" placeholder="Pedro de Paula" />
          </p>

          <p> 
            <label for="nascimento">Idade</label>
            <input id="nascimento" name="nascimento" required="required" type="date"/>
          </p>

          <p> 
            <label for="peso">Peso corporal</label>
            <input id="peso" name="peso" required="required" type="text" placeholder="64.00"/>
          </p>

<p> 
            <label for="altura">Altura</label>
            <input id="altura" name="altura" required="required" type="text" placeholder="185.0"/>
          </p>

          <p>
            <label for="email">E-mail</label>
            <input id="email" name="email" required="required" type="text" placeholder="pedrodepaula@gmail.com" />
          </p>
           
      
           
          <p> 
            <label for="senha">Senha</label>
            <input id="senha" name="senha" required="required" type="password" placeholder="pedro1234"/>
          </p>
    
<p> 
            <label for="tipo_diabetes">Tipo de Diabetes</label>
            </p>

<p>
            <label for="Diabetes Mellitus tipo 1">Diabetes Mellitus Tipo 1</label>
            <input id="Diabetes Mellitus tipo 1" name="diabetes1"  type="checkbox" value="Diabetes Mellitus tipo 1"/>
            </p>
            <p>
            <label for="Diabetes Mellitus tipo 2">Diabetes Mellitus Tipo 2</label>
            <input id="Diabetes Mellitus tipo 2" name="diabetes2"  type="checkbox" value="Diabetes Mellitus tipo 2"/>
            </p>
            <p>
            <label for="Diabetes Mellitus tipo Gestacional">Diabetes Mellitus Tipo Gestacional</label>
            <input id="Diabetes Mellitus tipo Gestacional" name="diabetesgestacional"  type="checkbox" value="Diabetes Mellitus tipo Gestacional"/>
            </p>
            <p>
            <label for="Diabetes Mellitus tipo LADA">Diabetes Mellitus Tipo LADA</label>
            <input id="Diabetes Mellitus tipo LADA" name="diabeteslada" type="checkbox" value="Diabetes Mellitus tipo LADA"/>
            </p>
            <p>
            <label for="Diabetes Mellitus tipo MODY">Diabetes Mellitus Tipo MODY</label>
            <input id="Diabetes Mellitus tipo MODY" name="diabetesmody" type="checkbox" value="Diabetes Mellitus tipo MODY"/>
            
          </p>


           
           
	  <p> Ler <a href="termos.html" class="nav-link" target="_self"> Termos e 	Política de Privacidade</a> </p>           
          <p>
           <input name="checkbox" type="checkbox" value="termos" required="required"/> Concordo com os Termos e Política de Privacidade do CarbsCounter
	</p>
          <p> 
            <input type="submit" name="cadastrar" value="Cadastrar"/> 
       
          
</p>
           
          <p class="link"> 
            Já tem conta?
            <a href="login.html" target="_self"> Ir para Login </a>
      
   </p>
        </form>
    
</div>

</div>

</div>

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
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