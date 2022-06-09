
<style type="text/css">
<!--
body {
	background-color: #90C1E2;
}
-->
</style>
<?php  
session_start();
if((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['cpf']) == true))
{
	unset($_SESSION['nome']);
	unset($_SESSION['cpf']);
	header('location:Pagina inicial.php');
	}

$logado= $_SESSION['cpf'];


?>
<?php
include "conecta-banco.php";
 
$row = $logado;

if(empty($row)){
echo "<script>alert ('Usuario  não encontrado.')</script>"; 
echo "<script> location.href=('login-usuario.php') </script>";
}
 
$sql = mysql_query("SELECT * FROM usuario WHERE cpf LIKE '%".$row."%' ");

if (mysql_num_rows ($sql) > 0){


$row = mysql_fetch_assoc($sql);

echo' Olá  ' .( $row['nome'] ). ' este é o resultado da sua avaliação:';

echo'<form action="logoff-funcao.php" method="post" name="logoff" id="logoff">';
echo'    <div align="right">';
echo'      <input type="submit" name="Submit2" value="FINALIZAR SESS&Atilde;O" />';
echo'    </div>';
echo'	 </form>';

echo' <div align="center">';
echo' <div align="center"><img src="Logo FAST RH.png" /></div>';
echo'<table width="720" border="0">';
echo'     
  <tr>';
echo'       <td width="136" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Nome Completo: </strong></td>';
echo'       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="label2"></label>';
echo'        ' .( $row['nome']) . '   </td>';
echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>CPF:</strong></td>';
echo'       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="label3"></label>';
echo'        ' .base64_decode( $row['cpf'] ). '</td>';
echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Data de nascimento: </strong></td>';
echo'       <td width="115" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'        
  <label for="label4"></label>';
echo'        ' .base64_decode( $row['datanascimento'] ). '        </td>
';
echo'       <td width="96" bordercolor="#CCCCCC" bgcolor="#FFFFFF"><strong>Sexo:</strong></td>
';
echo'       <td width="143" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="select"></label>';
echo'         ' .base64_decode( $row['sexo']) . '        </td>
';
echo'       <td width="63" bordercolor="#CCCCCC" bgcolor="#FFFFFF"> <strong>Estado Civil: </strong></td>
';
echo'       <td width="127" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="label5"></label>';
echo'         ' .base64_decode( $row['Ecivil'] ). '        </td>
';
echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Telefone:</strong></td>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="label6"></label>';
echo'        ' .base64_decode( $row['telefone'] ). '        </td>
';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF"><strong>Recados:</strong></td>
';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="label7"></label>';
echo'        ' .base64_decode( $row['recado'] ). '        </td>
';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF"><strong>UF:</strong></td>
';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF">' .base64_decode( $row['UF'] ). '</td>
';
echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>E-mail:</strong></td>';
echo'       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="label8"></label>';
echo'        ' .base64_decode( $row['email'] ). '        </td>';
echo'     </tr>';
echo'     <tr>';

echo'       <td  bordercolor="#CCCCCC" bgcolor="#CCCCCC"> <strong>Escolaridade: </strong></td>
';
echo'       <td colspan="5"" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="label5"></label>';
echo'         ' .base64_decode( $row['Escolaridade']) . '        </td>
';

echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Endere&ccedil;o:</strong></td>';
echo'       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
echo'         
  <label for="label12"></label>';
echo'        ' .base64_decode( $row['endereco'] ). '       </td>
';
echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Dispoibilidade de Hor&aacute;rio: </strong></td>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="label9"></label>';
echo'         ' .base64_decode( $row['Dishorario'] ). '        </td>
';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF"><strong>&Aacute;rea pretendida: </strong></td>
';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="label10"></label>';
echo'         ' .base64_decode( $row['Areapre']) . '        </td>
';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF"><strong>Filhos:</strong></td>
';
echo'       
<td bordercolor="#CCCCCC" bgcolor="#FFFFFF">' .base64_decode( $row['filhos'] ). '</td>
';
echo'     </tr>';
echo'    </table>';

echo'<strong>NOTAS DA AVALIAÇÃO</strong>';

echo'<div align="center">';
echo'<table width="715" border="0">';
echo'    
  <tr>';
echo'      <td width="202" bgcolor="#CCCCCC"><strong>Nota Matematica </strong></td>
';
echo'      <td width="142" bgcolor="#CCCCCC"><strong>Nota Portugues </strong></td>
';
echo'      <td width="216" bgcolor="#CCCCCC"><strong> Nota Racioc&iacute;nio L&oacute;gico </strong></td>
';
echo'      <td width="79" bgcolor="#CCCCCC"><strong>M&eacute;dia</strong></td>
';
echo'    </tr>';
echo'    <tr>';
echo'      <td bgcolor="#FFFFFF">' .$row['totalmat'] . ' Pontos</td>
';
echo'      <td bgcolor="#FFFFFF">' .$row['totalport'] .' Pontos</td>
';
echo'      <td bgcolor="#FFFFFF">' .$row['totalrac'] . ' Pontos</td>
';


$calc1= $row['totalmat'] + $row['totalport'] +  $row['totalrac'];
$media =($calc1/3);
$contagen =strlen( $media); 

if (($contagen) > 3){
$media = substr("$media", 0, -11);
}


echo'      <td bgcolor="#00FF66">'.$media.'</td>';
echo'    </tr>';
echo'    <tr>';

$calc2= $row['totalmat'] / 5;

echo'      <td bgcolor="#FFFFFF">'.$calc2.' de 5</td>';

$calc3= $row['totalport'] / 5;

echo'      <td bgcolor="#FFFFFF">'.$calc3.' de 5</td>';

$calc4= $row['totalrac'] / 5;

echo'      <td bgcolor="#FFFFFF">'.$calc4.' de 5</td> ';

$calc5 = $calc1 * 100 / 75;
$contagen =strlen( $calc5); 

if (($contagen) > 3){
$calc5 = substr("$calc5", 0, -11);
}

echo'      <td bgcolor="#FFFFFF">'.$calc5.'%</td>';
echo'    </tr>';
echo'  </table>';
echo' </div>';
}
echo' <p></p>';
echo'<form id="form1" name="form1" method="post" action="alterar usuario.php">';
echo'<input type="submit" name="Submit" value="ALTERAR DADOS CADASTRAIS" id="Submit" />';
echo'</form>'


?>
