<?php
// Conexao com o banco de dados
require "config.php";

// Inicia sessoes
ob_start();
session_start();

//recupera os valores do formulário para o login
$email = $_POST["email"] ;

$senha = $_POST["senha"];

// Caso o usuario nao tenha fornecido os dados de login
if(!$email || !$senha)
{
	echo "Você deve digitar sua senha e login!";
	exit;
}

// Procura o cadastro no banco de dados correspondente às credenciais

$sql = $conexao->query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");

// Guarda os dados em índices númericos ou em campos do próprio banco

$row = mysqli_fetch_array($sql);

// if(sizeof($row) > 0){

if(sizeof($row) <= 0){


header("Location:login.php");

}

else{

$dados = $row[0];

var_dump($row);


$_SESSION['id'] = $dados;

// caso os dados sejam correspondentes, o sistema redirecionará o usuário para a página home    

header("Location:home.php");


}




?>