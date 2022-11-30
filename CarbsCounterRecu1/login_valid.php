<?php
// Conex�o com o banco de dados
require "config.php";

// Inicia sessoes
session_start();

$email = $_POST["email"] ;

$senha = $_POST["senha"];

// Caso o usuario nao tenha fornecido os dados de login
if(!$email || !$senha)
{
	echo "Você deve digitar sua senha e login!";
	exit;
}

//$sql = mysql_query("SELECT * FROM usuario WHERE email = '$email' AND senha =  '$senha.'");
//$row = mysql_fetch_array($sql);
echo "antes de chamar a query";
//$sql = mysql_query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
$sql = $conexao->query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");
$row = mysqli_fetch_array($sql);
//echo $row->result();
if($row != null)
{
header("Location:land.php");

}

else
{
	header("Location:login.html");
}


?>