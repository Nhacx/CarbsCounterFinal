
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
<html>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
if($row > 0){
$dados = mysqli_fetch_assoc($sql);
<script>
console.log($dados);
</script>
</html>
$_SESSION['id'] = $dados->$id;


//$_SESSION['id'] = $dados['id'];

// caso os dados sejam correspondentes, o sistema redirecionará o usuário para a página home    

header("Location:home.php");

}

else{


header("Location:login.php");

}




?>
