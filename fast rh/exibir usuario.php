<style type="text/css">
<!--
body {
	background-color: #90C1E2;
}
-->
</style>
<?php  
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:Pagina inicial.php');
	}

$logado= $_SESSION['login'];
?>
<div align="center">
  <p><img src="Logo FAST RH.png"></p>
  <p>&nbsp;</p>
</div>

<div align="center">
<div align="center">

  <p>
 <?php
include "conecta-banco.php";

//soma todas as notas de portuges
$sql = mysql_query ("SELECT SUM(totalport) AS totalp FROM usuario");
$row = mysql_fetch_assoc($sql);
$result = $row['totalp'];

//conta quantidade de linhas
$sql2 =mysql_query("SELECT * FROM usuario");
$conlin = mysql_num_rows($sql2);

//calculo para gerar media de portugues
$mediatotalport =(($result)/($conlin));

//soma todas as notas de matematica
$sql = mysql_query ("SELECT SUM(totalmat) AS totalm FROM usuario");
$row = mysql_fetch_assoc($sql);
$result = $row['totalm'];

//conta quantidade de linhas
$sql2 =mysql_query("SELECT * FROM usuario");
$conlin = mysql_num_rows($sql2);

//calculo para gerar media de portugues
$mediatotalmat =(($result)/($conlin));

//soma todas as notas de raciocinio logico
$sql = mysql_query ("SELECT SUM(totalrac) AS totalr FROM usuario");
$row = mysql_fetch_assoc($sql);
$result = $row['totalr'];

//conta quantidade de linhas
$sql2 =mysql_query("SELECT * FROM usuario");
$conlin = mysql_num_rows($sql2);

//calculo para gerar media de portugues
$mediatotalrac =(($result)/($conlin));

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
@$row = $_GET["row"];

if(empty($row)){
echo "<script>alert ('Usuário não encontrado.')</script>"; 
echo "<script> location.href=('consulta-provas.php') </script>";
}

 
$sql = mysql_query("SELECT * FROM usuario WHERE cpf LIKE '%".$row."%' ");

if (mysql_num_rows ($sql) > 0){


$row = mysql_fetch_assoc($sql);


echo'<strong>DADOS PESSOAIS</strong>';
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
echo'        ' .base64_decode( $row['cpf'] ). '</td>
';
echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Data de nascimento: </strong></td>';
echo'       <td width="115" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'        
  <label for="label4"></label>';
echo'        ' .base64_decode( $row['datanascimento']) . '        </td>
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
         
echo'         <label for="label7"></label>';
echo'        ' .base64_decode( $row['recado']) . '        </td>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF"><strong>UF:</strong></td>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF">' .base64_decode( $row['UF']) . '</td>';
echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>E-mail:</strong></td>';
echo'       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';        
echo'          <label for="label8"></label>';
echo'        ' .base64_decode( $row['email']) . '        </td>';

echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Escolaridade</strong></td>';
echo'       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';         
echo'          <label for="label8"></label>';
echo'        ' .base64_decode( $row['Escolaridade']) . '        </td>';

echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Endere&ccedil;o:</strong></td>';
echo'       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
echo'         
  <label for="label12"></label>';
echo'        ' .base64_decode( $row['endereco']) . '       </td>
';
echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Dispoibilidade de Hor&aacute;rio: </strong></td>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="label9"></label>';
echo'         ' .base64_decode( $row['Dishorario']) . '        </td>
';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF"><strong>&Aacute;rea pretendida: </strong></td>
';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF">';
         
echo'         
  <label for="label10"></label>';
echo'         ' .base64_decode( $row['Areapre'] ). '        </td>
';
echo'       <td bordercolor="#CCCCCC" bgcolor="#FFFFFF"><strong>Filhos:</strong></td>
';
echo'       
<td bordercolor="#CCCCCC" bgcolor="#FFFFFF">' .base64_decode( $row['filhos']) . '</td>';
echo'     </tr>';
echo'    </table>';


echo'<p>&nbsp;</p>';
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
echo'      <td bgcolor="#FFFFFF">' .$row['totalmat']. ' Pontos</td>
';
echo'      <td bgcolor="#FFFFFF">' .$row['totalport'].' Pontos</td>
';
echo'      <td bgcolor="#FFFFFF">' .$row['totalrac'] . ' Pontos</td>
';


$calc1= $row['totalmat'] + $row['totalport'] + $row['totalrac'];

$media =($calc1/3);

$contagen =strlen($media);
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

$calc5 = $calc1* 100 / 75;

$contagen =strlen($calc5);
if (($contagen) > 3){
$calc5 = substr("$calc5", 0, -11);
}

echo'      <td bgcolor="#FFFFFF">'.$calc5.' %</td>';
echo'    </tr>';
echo'  </table>';
echo' </div>';

// enverter ordem da data dia/mês/ano
function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
}

echo'<b>QUESTIONÁRIO PREENCHIDO EM :</b>   </td>';
echo inverteData( $row['data']);
}
?>
  <p>
  
  <table width="352" border="0">
    <tr>
	<form id="COMENTARIO" name="preencher comentario" method="post"  action="preencher comentario.php?row=<?php echo   $row['cpf']  ?>&Comentario=<?php echo   $row['Comentario']  ?>&nome=<?php echo   $row['nome']  ?>" >
      <td width="89"><input name="COMENTARIO" type="image"  src="Botão comentario.png" alt="COMENTARIO" align="center" width="70" height="60" /></td>
   </form>
      </td>
      <td width="89"><form id="form3" name="form3" method="post" target="_blank" action="Gera-pdf.php?nome=<?php echo (  $row ['nome'])?>&cpf=<?php echo base64_decode(  $row['cpf']) ?>&sexo=<?php echo base64_decode(  $row['sexo']) ?>&Ecivil=<?php echo base64_decode(  $row['Ecivil']) ?>&datanascimento=<?php echo base64_decode(  $row['datanascimento']) ?>&telefone=<?php echo base64_decode( $row['telefone']) ?>&recado=<?php echo base64_decode( $row['recado']) ?>&email=<?php echo base64_decode( $row['email']) ?>&endereco=<?php echo base64_decode( $row['endereco']) ?>&Dishorario=<?php echo base64_decode( $row['Dishorario'] )?>&Areapre=<?php echo base64_decode( $row['Areapre']) ?>&filhos=<?php echo base64_decode( $row['filhos'] )?>&Escolaridade=<?php echo base64_decode( $row['Escolaridade'] )?>&UF=<?php echo base64_decode( $row['UF']) ?>&Comentario=<?php echo base64_decode( $row['Comentario'] )?>&totalmat=<?php echo $row['totalmat'] ?>&totalport=<?php echo $row['totalport'] ?>&totalrac=<?php echo $row['totalrac'] ?>&status=<?php echo base64_decode( $row['status'] )?>&calc1=<?php echo $calc1 ?>&calc2=<?php echo $calc2 ?>&calc3=<?php echo $calc3 ?>&calc4=<?php echo $calc4 ?>&calc5=<?php echo $calc5 ?>">
        <label></label>
        <input name="ATUALIZAR CADASTRO2" type="image" src="Printer-icon.png" align="center" width="70" height="60" />
      </form>      </td>
      <td width="89"><form id="COMPARAR RESULTADOS" name="COMPARAR RESULTADOS" method="post" target="_blank" action="Gera-grafico.php?totalport=<?php echo   $row['totalport']   ?>&totalmat=<?php echo   $row['totalmat']   ?>&totalrac=<?php echo   $row['totalrac']   ?>&mediatotalport=<?php echo $mediatotalport?>&mediatotalmat=<?php echo $mediatotalmat?>&mediatotalrac=<?php echo $mediatotalrac ?>">
        <label>
        <input name="ATUALIZAR CADASTRO" type="image" src="Column-Chart-icon.png" align="center" width="70" height="60" />
        </label>
      </form></td>
	  <form id="Preenche-email" name="Preenche-email" method="post"  action="Preenche-email.php?email=<?php echo   $row['email']   ?>&nome=<?php echo   $row['nome']   ?>" >
      <td width="67"><input name="email" type="image" src="email-.png" align="center" width="70" height="60" /></td>
	  </form>
    </tr>
  </table>
  <p>
  
  <form id="form2" name="form2" method="post" action="altera-status.php?row=<?php echo   $row['cpf']   ?>">  
    <table width="327" border="0">
      <tr>
        <td width="63">
          <select name="status" id="status">
            <option value=""><?php echo base64_decode(  $row['status']) ?></option>
            <option value="Avaliado">AVALIADO</option>
            <option value="Em Andamento">EM ANDAMENTO</option>
            <option value="Arquivado">ARQUIVADO</option>
			<option value="Contratado">CONTRATADO</option>
          </select>
        </td>
        <td width="248">
        <input type="image" name="imageField22" src="Botão marcar.png" width="150"  height="30"/>
  </form></td>
		  <form id="form1" name="form1" method="post" action="consulta-provas.php">
        <td width="248">&nbsp;</td>
        <td width="248">
        <input type="image" name="imageField22" src="Botão voltar.png" width="150"  height="30"/>
        </form>        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      </table>
</div>
    <div align="center"></div>
 