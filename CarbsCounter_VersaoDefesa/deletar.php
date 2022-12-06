<?php
//conexão com o banco de dados
include_once('config.php');

// recupera o id do usuário logado
ob_start();
session_start();
  if(!isset($_SESSION['id'])){
    header('Location:home0.php');
    exit();
  }  
$id_usuario = $_SESSION['id'];

//Ao clicar no botão de salvar(alterar) no formulário de alteração, os dados são retornados para o mesmo arquivo
if(isset($_POST['sim']))
{   
echo '<script>alert("Deletado")</script>';


$result = mysqli_query($conexao, "DELETE FROM usuarios where id = '$id_usuario' ");

if($result){

include_once('session_destroy.php');
}


}

if(isset($_POST['nao']))
{


header("Location:usuario_info.php");

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
 <form method="post" action="deletar.php"> 
          <h1>Deletar</h1> 
           
 	<p> 

   	    <label for="choice">Tem certeza que quer excluir sua conta eternamente?</label>
            <input type="submit" name="sim" value="SIM"/> 
	    <input type="submit" name="nao" value="NÃO"/>
 

          
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