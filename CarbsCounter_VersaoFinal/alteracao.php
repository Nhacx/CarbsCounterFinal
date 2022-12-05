<?php
//conexão com o banco de dados
include_once('config.php');

// recupera o id do usuário logado
ob_start();
session_start();
$id_usuario = $_SESSION['id'];

//Ao clicar no botão de salvar(alterar) no formulário de alteração, os dados são retornados para o mesmo arquivo
if(isset($_POST['alterar']))
{
//recupera os dados preenchidos
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

// esquema para não permitir que campos deixados em branco sejam alterados no banco
if($nome != "") 
{

//altera o dado correspondente ao campo nome do usuário logado
$result = mysqli_query($conexao, "UPDATE usuarios set nome = '$nome' where id = '12' ");

}

if($peso != "")
{

$result = mysqli_query($conexao, "UPDATE usuarios set peso = '$peso' where id = '12' ");

}

if($altura != "") 
{

$result = mysqli_query($conexao, "UPDATE usuarios set altura = '$altura' where id = '12' ");

}

if($email != "") 
{

$result = mysqli_query($conexao, "UPDATE usuarios set email = '$email' where id = '12' ");

}

if($senha != "") 
{

$result = mysqli_query($conexao, "UPDATE usuarios set senha = '$senha' where id = '12' ");

}

if($nascimento)
  {
   $result = mysqli_query($conexao, "UPDATE usuarios set nascimento = '$nascimento' where id = '12' ");
  }

 if($tipo_diabetes)
  {
   $result = mysqli_query($conexao, "UPDATE usuarios set tipo_diabetes = '$tipo_diabetes' where id = '12' ");
  }



echo ($nome);




}

include_once("cabecalho.php");  
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
</head>

<body>


</br>


<div class="container">
<p id="p1"> 


<a class="links" id="paracadastro"></a>

<a class="links" id="paralogin"></a>

<div class="content">  
 <!--FORMULÁRIO DE ALTERAÇÃO-->
 <div id="cadastro">
 <form method="post" action="alteracao.php"> 
          <h1>Dados</h1> 
           
 	<p> 

   	    <label for="cpf">CPF</label>
            <input id="cpf" name="cpf" type="text" placeholder="" />
          </p>
          <p> 

   	    <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text" placeholder="" />
          </p>

<p> 
            <label for="nascimento">Data de Nascimento</label>
            <input id="nascimento" name="nascimento" type="date"/>
          </p>

<p> 
            <label for="peso">Peso corporal</label>
            <input id="peso" name="peso" type="text" placeholder=""/>
          </p>

<p> 
            <label for="altura">Altura</label>
            <input id="altura" name="altura" type="text" placeholder=""/>
          </p>

	   <p>
            <label for="email">E-mail</label>
            <input id="email" name="email" type="text" placeholder="" />
          </p>
           
      
           
          <p> 
            <label for="senha">Senha</label>
            <input id="senha" name="senha" type="password" placeholder=""/>
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
            <label for="Diabetes Mellitus tipo LADA">Diabetes Tipo LADA</label>
            <input id="Diabetes tipo LADA" name="diabeteslada" type="checkbox" value="Diabetes tipo LADA"/>
            </p>

            <p>
            <label for="Diabetes tipo MODY">Diabetes Tipo MODY</label>
            <input id="Diabetes tipo MODY" name="diabetesmody" type="checkbox" value="Diabetes tipo MODY"/>            
          </p>
                    
          
          <p> 
            <input type="submit" name="alterar" value="Salvar"/> 
       
          
        </form>
    
</p>

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

</main>


</body>
</html>