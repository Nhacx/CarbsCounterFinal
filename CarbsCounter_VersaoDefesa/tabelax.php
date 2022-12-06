<?php
    require "config.php";
    session_start();
if(!isset($_SESSION['id'])){
    header('Location:home0.php');
    exit();
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

<h1> Tabela Nutricional </h1>
<center>
<table rules="all">
<thead>
<tr>
<th> ID </th>
<th> Porção (g) </th>
<th> Alimento </th>
<th> Valor Energético (kcal) </th>
<th> Carboidratos (g) </th>
<th> Proteínas (g) </th>
<th> Gorduras (g) </th>
</tr>
</thead>

<tbody>

<?php

$sql_consulta = mysqli_query($conexao, "SELECT * from alimentos");

while($linha=mysqli_fetch_array($sql_consulta))
{
?>
<tr>
<td> <?= $linha[0] ?> </td>
<td> <?= $linha[1] ?> </td>
<td> <?= $linha[2] ?> </td>
<td> <?= $linha[3] ?> </td>
<td> <?= $linha[4] ?> </td>
<td> <?= $linha[5] ?> </td>
<td> <?= $linha[6] ?> </td>
</tr>
<?php 
}

?>
</tbody>
</table>
</center>

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