﻿<?php

include_once('config.php');
include_once("cabecalho.php");  
include_once("footer.php");  

ob_start();
session_start();
if(!isset($_SESSION['id'])){
    header('Location:home0.php');
    exit();
  }  
$id_usuario = $_SESSION['id'];
echo $id_usuario;

?>
<html lang="pt-br">

<head>
    <meta http-equiv= "Content-Type" content= "text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarbsCounter</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="stylehome.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js">
</script>
</head>

<body>


</br>
</br>
</br>

<div class="container">
<p id="p1"> 

<?php

$sql_consulta = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id = '$id_usuario'");

while($linha=mysqli_fetch_array($sql_consulta))
{
?>

 ID: <?= $linha[0] ?> 
</br>
 CPF: <?= $linha[1] ?> 
</br>
 USUÁRIO: <?= $linha[2] ?> 
</br>
 EMAIL: <?= $linha[7] ?> 
</br>
 DATA DE NASCIMENTO: <?= $linha[3] ?> 
</br>
 SEXO: <?= $linha[4] ?> 
</br>
 PESO: <?= $linha[5] ?> 
</br>
 ALTURA: <?= $linha[6] ?> 
</br>
 TIPO DE DIABETES: <?= $linha[9] ?> 
</br>

<?php 
}

?>

</br> <a href="alteracao.php" class="nav-link">Alterar dados</a>
</br> <a href="deletar.php" class="nav-link">Deletar Conta</a>

</p>

</div>


</br>
</br>
</br>
</br>
</br>
</br>

</main>


</body>
</html>