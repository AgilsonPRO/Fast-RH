<?php  
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:Pagina inicial.php');
	}

$logado= $_SESSION['senha'];
?>
<?php

$nome            =$_GET["nome"]; 
$cpf             =$_GET["cpf"];
$sexo            =$_GET["sexo"];
$Ecivil          =$_GET["Ecivil"];
$datanascimento  =$_GET["datanascimento"];
$telefone        =$_GET["telefone"];
$recado          =$_GET["recado"];      
$endereco        =$_GET["endereco"];
$Dishorario      =$_GET["Dishorario"];
$Areapre         =$_GET["Areapre"];
$filhos          =$_GET["filhos"];
$Escolaridade    =$_GET["Escolaridade"];
$UF              =$_GET["UF"];
$data            = date("d-m-y");

$calc1           =$_GET["calc1"];
$calc2           =$_GET["calc2"];
$calc3           =$_GET["calc3"];
$calc4           =$_GET["calc4"];
$calc5           =$_GET["calc5"];



$totalport       =$_GET["totalport"];
$totalmat        =$_GET["totalmat"];
$totalrac        =$_GET["totalrac"];
$status          =$_GET["status"];           

 
$html = '

<div align="center">
  <p><img src="Logo FAST RH.png"></p>
  <p><strong>DADOS DO CANDIDATO </strong></p>
</div>
<div align="center">
  <table width="638" border="1">
    <tr>
      <td width="180" bgcolor="#CCCCCC"><strong>NOME:</strong></td>
      <td width="442">' .$nome . '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>CPF:</strong></td>
      <td>' .$cpf . '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>SEXO:</strong></td>
      <td>' .$sexo. '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>ESTADO CIVIL: </strong></td>
      <td>' .$Ecivil. '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>DATA DE NASCIMENTO: </strong></td>
      <td>' .$datanascimento. '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>TELEFONE:</strong></td>
      <td>' .$telefone. '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>RECADO:</strong></td>
      <td>' .$recado. '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>ENDERE&Ccedil;O:</strong></td>
      <td>' .$endereco. '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>DISPONIBILIDADE DE HORARIO: </strong></td>
      <td>' .$Dishorario. '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>&Aacute;REA PRETENDIDA: </strong></td>
      <td>' .$Areapre. '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>FILHOS:</strong></td>
      <td>' .$filhos. '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>ESCOLARIDADE:</strong></td>
      <td>' .$Escolaridade. '</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>UF:</strong></td>
      <td>' .$UF. '</td>
    </tr>
  </table>
</div>
<p align="center"><strong>NOTAS DA AVALIAÇÃO</strong> </p>
 <div align="center">
   <table width="715" border="1">    
  <tr>
 <td width="202" bgcolor="#CCCCCC"><strong>Nota Matematica </strong></td>
 <td width="142" bgcolor="#CCCCCC"><strong>Nota Portugues </strong></td>
<td width="216" bgcolor="#CCCCCC"><strong> Nota Racioc&iacute;nio L&oacute;gico </strong></td>
<td width="79" bgcolor="#CCCCCC"><strong>M&eacute;dia</strong></td>
</tr>
<tr>
 <td bgcolor="#FFFFFF">' .$totalport . ' Pontos</td>
 <td bgcolor="#FFFFFF">' .$totalmat . ' Pontos</td>
 <td bgcolor="#FFFFFF">' .$totalrac. ' Pontos</td>


 <td bgcolor="#00FF66">' .$calc1. '</td>
    </tr>
    <tr>

<td bgcolor="#FFFFFF">' .$calc2. 'de 5</td>

<td bgcolor="#FFFFFF">' .$calc3. 'de 5</td>
<td bgcolor="#FFFFFF">' .$calc4. 'de 5</td> 

<td bgcolor="#FFFFFF">' .$calc5. '%</td>
</tr>
</table>
   <p>Fast RH 2016</p>
   <p>Arquivo Gerado em : ' .$data. '  </p>
   <p>Status do Candidato:' .$status. ' </p>
</div>


';

include("mpdf60/mpdf.php");
$mpdf=new mPDF('c'); 
$mpdf->charset_in='windows-1252';
$mpdf->WriteHTML($html);
$mpdf->Output();

exit;



?>