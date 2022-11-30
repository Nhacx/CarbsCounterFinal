<?php

	$dbHost = 'Localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'carbscounterofc';

	$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

	if($conexao->connect_errno)
	{
		echo "Erro";
	}
	else
	{
echo "<font align= \"center\" color= \"white\" face=\"Verdana\" size=2>Conexão Realizada com Sucesso!<BR>\n";
	}



?>