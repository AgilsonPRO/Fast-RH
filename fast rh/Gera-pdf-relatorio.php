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

      $totalsexom         =$_GET["totalsexom"]; 
      $totalsexof         =$_GET["totalsexof"]; 
      $totalManha         =$_GET["totalManha"];
      $totalIntermediario =$_GET["totalIntermediario"];
      $totalNoite         =$_GET["totalNoite"];
      $totalSolteiro      =$_GET["totalSolteiro"]; 
      $totalCasado        =$_GET["totalCasado"];
      $totalDivorciado    =$_GET["totalDivorciado"];
      $totalContratado    =$_GET["totalContratado"];
      $totalEm_andamento  =$_GET["totalEm_andamento"];
      $totalEm_Avaliado   =$_GET["totalEm_Avaliado"];
      $totalEm_Arquivado  =$_GET["totalEm_Arquivado"];
    
     $porcent_sexo1       =$_GET["porcent_sexo1"];
     $porcent_sexo2       =$_GET["porcent_sexo2"];
     $porcent_TUR_MANHA   =$_GET["porcent_TUR_MANHA"];
     $porcent_TUR_INTER   =$_GET["porcent_TUR_INTER"];
     $porcent_TUR_NOITE   =$_GET["porcent_TUR_NOITE"];
     $porcent_solteiro    =$_GET["porcent_solteiro"];
     $porcent_casado      =$_GET["porcent_casado"];
     $porcent_divorciado  =$_GET["porcent_divorciado"];
     $porcent_contratado  =$_GET["porcent_contratado"];
     $porcent_em_andamento=$_GET["porcent_em_andamento"];
     $porcent_avaliado    =$_GET["totalCasado"];
     $porcent_Arquivado   =$_GET["porcent_Arquivado"];
	 $conlin              =$_GET["conlin"]; 
	 $total_Novo          =$_GET["total_Novo"]; 
	 $totalRNORTE         =$_GET["totalRNORTE"];
	 $totalRNORDESTE      =$_GET["totalRNORDESTE"]; 
	 $totalRCENTRO_OESTE  =$_GET["totalRCENTRO_OESTE"];
     $totalRSUDESTE       =$_GET["totalRSUDESTE"];
	 $totalRSUL           =$_GET["totalRSUL"];
	 $porcent_Novo        =$_GET["porcent_Novo"]; 
	 $data                = date("d-m-y");
 
$html = '
<div align="center">
  <p><img src="Logo FAST RH.png"></p>
</div>

<table width="1320" border="0">
    <tr>
      <td width="111" bgcolor="#CCCCCC"><strong>SEXO MASCULINO: </strong></td>
      <td width="93" bgcolor="#CCCCCC"><strong>SEXO FEMININO: </strong></td>
      <td width="90" bgcolor="#CCCCCC"><strong>MANH&Atilde;:</strong></td>
      <td width="140" bgcolor="#CCCCCC"><strong>INTERMEDIARIO:</strong></td>
      <td width="117" bgcolor="#CCCCCC"><strong>NOITE:</strong></td>
      <td width="90" bgcolor="#CCCCCC"><strong>SOLTEIRO: </strong></td>
      <td width="86" bgcolor="#CCCCCC"><strong>CASADO:</strong></td>
      <td width="110" bgcolor="#CCCCCC"><strong>DIVORCIADO:</strong></td>
      <td width="121" bgcolor="#CCCCCC"><strong>CONTRADADO:</strong></td>
      <td width="115" bgcolor="#CCCCCC"><strong>EM ANDAMENTO: </strong></td>
      <td width="89" bgcolor="#CCCCCC"><strong>AVALIADO:</strong></td>
      <td width="108" bgcolor="#CCCCCC"><strong>ARQUIVADO:</strong></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">'.$totalsexom.'</td>
      <td bgcolor="#FFFFFF">'.$totalsexof.'</td>
      <td bgcolor="#FFFFFF">'.$totalManha .'</td>
      <td bgcolor="#FFFFFF">'.$totalIntermediario .' </td>
      <td bgcolor="#FFFFFF">'.$totalNoite .'</td>
      <td bgcolor="#FFFFFF">'.$totalSolteiro .'</td>
      <td bgcolor="#FFFFFF">'.$totalCasado .'</td>
      <td bgcolor="#FFFFFF">'.$totalDivorciado.'</td>
      <td bgcolor="#FFFFFF">'.$totalContratado .'</td>
      <td bgcolor="#FFFFFF">'.$totalEm_andamento .'</td>
      <td bgcolor="#FFFFFF">'.$totalEm_Avaliado .'</td>
      <td bgcolor="#FFFFFF">'.$totalEm_Arquivado .'</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">'.$porcent_sexo1 .' %</td>
      <td bgcolor="#FFFFFF">'.$porcent_sexo2 .' %</td>
      <td bgcolor="#FFFFFF">'.$porcent_TUR_MANHA .' %</td>
      <td bgcolor="#FFFFFF">'.$porcent_TUR_INTER .' %</td>
      <td bgcolor="#FFFFFF">'.$porcent_TUR_NOITE .' %</td>
      <td bgcolor="#FFFFFF">'.$porcent_solteiro .' %</td>
      <td bgcolor="#FFFFFF">'.$porcent_casado .' %</td>
      <td bgcolor="#FFFFFF">'.$porcent_divorciado .' %</td>
      <td bgcolor="#FFFFFF">'.$porcent_contratado .' %</td>
      <td bgcolor="#FFFFFF">'.$porcent_em_andamento .' %</td>
      <td bgcolor="#FFFFFF">'.$porcent_avaliado .' %</td>
      <td bgcolor="#FFFFFF">'.$porcent_Arquivado .' %</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>TOTAL USUARIOS: </strong></td>
      <td bgcolor="#CCCCCC"><strong>NOVO:</strong></td>
      <td bgcolor="#CCCCCC"><strong> SUL: </strong></td>
      <td bgcolor="#CCCCCC"><strong> NORDESTE: </strong></td>
      <td bgcolor="#CCCCCC"><strong> CENTRO-OESTE: </strong></td>
      <td bgcolor="#CCCCCC"><strong> SUDESTE: </strong></td>
      <td bgcolor="#CCCCCC"><strong> NORTE: </strong></td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">'.$conlin .'</td>
      <td bgcolor="#FFFFFF">'.$total_Novo.'</td>
      <td bgcolor="#FFFFFF">'.$totalRSUL .'</td>
      <td bgcolor="#FFFFFF">'.$totalRNORDESTE .'</td>
      <td bgcolor="#FFFFFF">'.$totalRCENTRO_OESTE .'</td>
      <td bgcolor="#FFFFFF">'.$totalRSUDESTE .'</td>
      <td bgcolor="#FFFFFF">'.$totalRNORTE .'</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">'.$porcent_Novo.'</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table>
  

   <p>Fast RH </p>
   <p>Arquivo Gerado em : ' .$data. '  </p>
  
';

include("mpdf60/mpdf.php");
$mpdf=new mPDF('c'); 
$mpdf->charset_in='windows-1252';
$mpdf->WriteHTML($html);
$mpdf->Output();

exit;



?>  