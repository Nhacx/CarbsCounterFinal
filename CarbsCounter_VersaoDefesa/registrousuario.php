<?php

if(isset($_POST['cadastrar']))
{
	include_once('config.php');

	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
  	$nascimento = $_POST['nascimento'];
	$sexo = $_POST['sexo'];
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

	$test = $conexao->query("SELECT cpf, email FROM usuarios WHERE cpf= '$cpf' OR email='$email'");

// Guarda os dados em índices númericos ou em campos do próprio banco
$line = mysqli_fetch_array($test);

if($line > 0){
// caso os dados sejam correspondentes, o sistema redirecionará o usuário para a página home    
echo '<script>alert("CPF ou Email já cadastrados")</script>';



}

else{

$result = mysqli_query($conexao, "INSERT INTO usuarios(cpf, nome, nascimento, sexo, peso, altura, email, senha,  tipo_diabetes) VALUES ('$cpf', '$nome', '$nascimento', '$sexo', '$peso',  '$altura', '$email', '$senha', '$tipo_diabetes')");

echo ($nome);

header("Location:login.php");


}

}

include_once("cabecalho0.php");  
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

<script>
let value_cpf = document.querySelector('#cpf');

 value_cpf.addEventListener("keydown", function(e) {
   if (e.key > "a" && e.key < "z") {
     e.preventDefault();
   }
 });
value_cpf.addEventListener("blur", function(e) {
     //Remove tudo o que não é dígito
     let validar_cpf = this.value.replace( /\D/g , "");

     //verificação da quantidade números
     if (validar_cpf.length==11){

     // verificação de CPF valido
      var Soma;
      var Resto;

      Soma = 0;
      for (i=1; i<=9; i++) Soma = Soma + parseInt(validar_cpf.substring(i-1, i)) * (11 - i);
         Resto = (Soma * 10) % 11;

      if ((Resto == 10) || (Resto == 11))  Resto = 0;
      if (Resto != parseInt(validar_cpf.substring(9, 10)) ) return alert("CPF Inválido!");;

      Soma = 0;
      for (i = 1; i <= 10; i++) Soma = Soma + parseInt(validar_cpf.substring(i-1, i)) * (12 - i);
      Resto = (Soma * 10) % 11;

      if ((Resto == 10) || (Resto == 11))  Resto = 0;
      if (Resto != parseInt(validar_cpf.substring(10, 11) ) ) return alert("CPF Inválido!");;

      //formatação final
      cpf_final = validar_cpf.replace( /(\d{3})(\d)/ , "$1.$2");
      cpf_final = cpf_final.replace( /(\d{3})(\d)/ , "$1.$2");
      cpf_final = cpf_final.replace(/(\d{3})(\d{1,2})$/ , "$1-$2");
      document.getElementById('cpf').value = cpf_final;

     } else {
       alert("CPF Inválido! É esperado 11 dígitos numéricos.")
     }   

 })
</script>
</head>

<body>
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
            <input id="cpf" name="cpf" required="required" type="text" placeholder="101.102.103-04" />
          </p>
          <p> 

   	    <label for="nome">Nome</label>
            <input id="nome" name="nome" required="required" type="text" placeholder="Pedro de Paula" />
          </p>

<p> 
            <label for="nascimento">Data de Nascimento</label>
            <input id="nascimento" name="nascimento" required="required" type="date"/>
          </p>

<label for="sexo">Sexo</label>
            <input id="sexo" name="sexo" required="required" type="text" placeholder="Masculino" />
          </p>

<p> 
            <label for="peso">Peso corporal</label>
            <input id="peso" name="peso" required="required" type="text" placeholder="64.00"/>
          </p>

<p> 
            <label for="altura">Altura</label>
            <input id="altura" name="altura" required="required" type="number" placeholder="185.0"/>
          </p>

	   <p>
            <label for="email">E-mail</label>
            <input id="email" name="email" required="required" type="email" placeholder="pedrodepaula@gmail.com" />
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
            <label for="Diabetes Mellitus tipo Gestacional">Diabetes Mellitus Tipo Gestacional</label>
            <input id="Diabetes Mellitus tipo Gestacional" name="diabetesgestacional"  type="checkbox" value="Diabetes Mellitus tipo Gestacional"/>
            </p>
 <p>
            <label for="Diabetes Mellitus tipo LADA">Diabetes Tipo LADA</label>
            <input id="Diabetes tipo LADA" name="diabeteslada"  type="checkbox" value="Diabetes tipo LADA"/>
            </p>
 <p>
            <label for="Diabetes tipo MODY">Diabetes Tipo MODY</label>
            <input id="Diabetes tipo MODY" name="diabetesmody"  type="checkbox" value="Diabetes tipo MODY"/>
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


</body>
</html>