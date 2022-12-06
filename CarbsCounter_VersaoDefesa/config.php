<?php

	$dbHost = 'Localhost';
	$dbUsername = 'carbscounter';
	$dbPassword = 'carbs123';
	$dbName = 'carbscounterdb';

	$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

	if($conexao->connect_errno)
	{
		echo "Erro";
	}
	else
	{


// Display the alert box
echo '<script>alert("Conexão Realizada com Sucesso!")</script>';


//echo "<font color= \"white\">Conexão Realizada com Sucesso!\n";
	}



?>