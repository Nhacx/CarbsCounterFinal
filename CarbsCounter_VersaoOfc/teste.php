<?php

include_once("cabecalho0.php");

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

<script>
function init() 
{		
	window.addEventListener('load', init);
}
</script>
</head>

<body>
<div class="container">
<p id="p1"> 
<div align="center">
<?php
session_start();
include "config.php";
?>
<table cellSpacing=1 cellPadding=0 width="50%" align=center border=0>
<tr>
<td>
 <?
//*********************************************************************
// GERA A INSTRUÇÃO SQL E CHAMA A FUNÇÃO PARA GERAR AS COLUNAS
//*********************************************************************
$sql = "SELECT * FROM alimentos ORDER BY RAND() LIMIT 0,4";
$resultado = mysql_query($sql);
?>
</td>
</tr>
</table>
<?php

$resultado = mysql_query($pQuery);
echo ("<table width='100%' border='0'>\n");
for($i = 0; $i <= mysql_num_rows($resultado); ++$i) {

for ($intCont = 0; $intCont < $pNumColunas; $intCont++) {
  $linha = mysql_fetch_array($resultado);
  if ($i > $linha) {
   if ( $intCont < $pNumColunas-1) echo "</tr>\n";
   break;
  }

  $id = $linha[0];
  $porcao_alimento = $linha[1];
  $nome_alimento = $linha[2];
  $quantidade_calorias = $linha[3];
$quantidade_carboidratos = $linha[4];
$quantidade_proteinas = $linha[5];
$quantidade_gorduras = $linha[6];
$medida = $linha[7];
  

  if ( $intCont == 0 ) echo "<tr>\n";
  echo "<td>";
  // Aqui você inclui o conteudo
  echo "<table width='266' border='0' cellspacing='0' cellpadding='0'>";
  echo "<tr>";
  echo "<td>";
  echo "<table width='92%' border='0' align='center' cellpadding='0' cellspacing='0'>";
  echo "<tr>";
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><strong><a href='carrinho.php?id=".$id."&acao=incluir'>".$nome_alimento."</a></strong></div><strong><div align='center'><font color='#FF0000' size='4px'> R$ ".$porcao_alimento." </font></strong></div></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><a href='carrinho.php?id=".$id."&acao=incluir'> Incluir </a></div><br></td>";
  echo "</tr>";
  echo "</table>";
  echo "</td>";
  echo "</tr>";
  echo "</table>";
  
   // Aqui é o final do conteudo
  echo "</td>";

  if ( $intCont == $pNumColunas-1 ) {
   echo "</tr>\n";
  } else { $i++; }
}

}
echo ('</table>');
}

?>
</p>
</div>
</div>
</div>

</main>

</br>
</br>

<?php

include_once("footer.php");

?>
</body>
</html>