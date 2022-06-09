<style type="text/css">
<!--
body {
	background-color: #90C1E2;
}
-->

</style>
<?php  
@session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:Pagina inicial.php');
	$logado= $_SESSION['senha'];
}
?>


<?php
include "conecta-banco.php";
//sql de buas por sexo
//soma quantidade de usuarios do secxo masculino
$MASCULINO ="Masculino";
$Masculino = base64_encode($MASCULINO); 

$sql = mysql_query ("SELECT * FROM usuario WHERE sexo = '$Masculino' ");
$totalsexom = mysql_num_rows($sql);

//soma quantidade de usuarios do secxo Feminino
$FEMININO ="Feminino";
$Feminino = base64_encode($FEMININO);
$sql = mysql_query ("SELECT * FROM usuario WHERE sexo = '$Feminino' ");
$totalsexof = mysql_num_rows($sql);

//conta quantidade de usuarios
$sql2 =mysql_query("SELECT * FROM usuario");
$conlin = mysql_num_rows($sql2);

//calculo participação masculina
$porcent_sexo1 =( ($totalsexom)*100 /($conlin));
//calculo participação feminina
$porcent_sexo2 =(($totalsexof)*100/($conlin));

$contagen =strlen($porcent_sexo1);
if (($contagen) > 3){
$porcent_sexo1 = substr("$porcent_sexo1", 0, -11);
}
$contagen =strlen($porcent_sexo2);
if (($contagen) > 3){
$porcent_sexo2 = substr("$porcent_sexo2", 0, -11);
}


//estado civil
$CASADO ="Casado(a)";
$Casado = base64_encode($CASADO);
$sql = mysql_query ("SELECT * FROM usuario WHERE Ecivil = '$Casado' ");
$totalCasado = mysql_num_rows($sql);

$SOLTEIRO ="Solteiro(a)";
$Solteiro = base64_encode($SOLTEIRO);
$sql = mysql_query ("SELECT * FROM usuario WHERE Ecivil = '$Solteiro' ");
$totalSolteiro = mysql_num_rows($sql);

$DIVORCIADO ="Divorciado(a)";
$Divorciado = base64_encode($DIVORCIADO);
$sql = mysql_query ("SELECT * FROM usuario WHERE Ecivil = '$Divorciado' ");
$totalDivorciado = mysql_num_rows($sql);


//conta quantidade de usuarios
$sql2 =mysql_query("SELECT * FROM usuario");
$conlin = mysql_num_rows($sql2);

//calculo participação casado
$porcent_casado =( ($totalCasado)*100 /($conlin));
//calculo participação solteiro
$porcent_solteiro =(($totalSolteiro)*100/($conlin));
//calculo participação Divorciado
$porcent_divorciado =(($totalDivorciado)*100/($conlin));

$contagen =strlen($porcent_casado);
if (($contagen) > 3){
$porcent_casado = substr("$porcent_casado", 0, -11);
}
$contagen =strlen($porcent_solteiro);
if (($contagen) > 3){
$porcent_solteiro = substr("$porcent_solteiro", 0, -11);
}
$contagen =strlen($porcent_divorciado);
if (($contagen) > 3){
$porcent_divorciado = substr("$porcent_divorciado", 0, -11);
}




//turno pretendido
$MANHA ="Manhã";
$Manha = base64_encode($MANHA);
$sql = mysql_query ("SELECT * FROM usuario WHERE DIshorario = '$Manha' ");
$totalManha = mysql_num_rows($sql);

$NOITE ="Noite";
$Noite = base64_encode($NOITE);
$sql = mysql_query ("SELECT * FROM usuario WHERE DIshorario = '$Noite' ");
$totalNoite = mysql_num_rows($sql);

$INTERMEDIARIO ="Intermediario";
$Intermediario = base64_encode($INTERMEDIARIO);
$sql = mysql_query ("SELECT * FROM usuario WHERE DIshorario = '$Intermediario' ");
$totalIntermediario = mysql_num_rows($sql);

//conta quantidade de usuarios
$sql2 =mysql_query("SELECT * FROM usuario");
$conlin = mysql_num_rows($sql2);

//calculo participação manhã
$porcent_TUR_MANHA =( ($totalManha)*100 /($conlin));
//calculo participação intermediario
$porcent_TUR_INTER =(($totalIntermediario)*100/($conlin));
//calculo participação Noite
$porcent_TUR_NOITE =(($totalNoite)*100/($conlin));

$contagen =strlen($porcent_TUR_MANHA);
if (($contagen) > 3){
$porcent_TUR_MANHA = substr("$porcent_TUR_MANHA", 0, -11);
}
$contagen =strlen($porcent_TUR_INTER);
if (($contagen) > 3){
$porcent_TUR_INTER = substr("$porcent_TUR_INTER", 0, -11);
}
$contagen =strlen($porcent_TUR_NOITE);
if (($contagen) > 3){
$porcent_TUR_NOITE = substr("$porcent_TUR_NOITE", 0, -11);
}


//sql por estatus
$CONTRATADO ="Contratado";
$Contratado = base64_encode($CONTRATADO);
$sql = mysql_query ("SELECT * FROM usuario WHERE status = '$Contratado' ");
$totalContratado = mysql_num_rows($sql);

$EM_ANDAMENTO ="Em Andamento";
$Em_andamento = base64_encode($EM_ANDAMENTO);
$sql = mysql_query ("SELECT * FROM usuario WHERE status = '$Em_andamento' ");
$totalEm_andamento = mysql_num_rows($sql);

$AVALIADO ="Avaliado";
$Avaliado = base64_encode($AVALIADO);
$sql = mysql_query ("SELECT * FROM usuario WHERE status = '$Avaliado' ");
$totalEm_Avaliado = mysql_num_rows($sql);

$ARQUIVADO ="Arquivado";
$Arquivado = base64_encode($ARQUIVADO);
$sql = mysql_query ("SELECT * FROM usuario WHERE status = '$Arquivado' ");
$totalEm_Arquivado = mysql_num_rows($sql);

$NOVO ="NOVO";
$Novo = base64_encode($NOVO);
$sql = mysql_query ("SELECT * FROM usuario WHERE status = '$Novo' ");
$total_Novo = mysql_num_rows($sql);


//quantidade de usuarios
$sql2 =mysql_query("SELECT * FROM usuario");
$conlin = mysql_num_rows($sql2);

if ($colin =0 ){
echo "<script>alert ('Nenhum usuário cadastrado.')</script>"; 
echo "<script> location.href=('consulta provas.php') </script>";
}

//calculo participação  contratado
$porcent_contratado =( ($totalContratado)*100 /($conlin));
//calculo participação Em andamento
$porcent_em_andamento =(($totalEm_andamento)*100/($conlin));
//calculo participação Avaliado
$porcent_avaliado =(($totalEm_Avaliado)*100/($conlin));
//calculo participação Arquivado
$porcent_Arquivado =(($totalEm_Arquivado)*100/($conlin));
//calculo status NOVO
$porcent_Novo =(($total_Novo)*100/($conlin));

$contagen =strlen($porcent_contratado);
if (($contagen) > 3){
$porcent_contratado = substr("$porcent_contratado", 0, -11);
}
$contagen =strlen($porcent_em_andamento);
if (($contagen) > 3){
$porcent_em_andamento = substr("$porcent_em_andamento", 0, -11);
}
$contagen =strlen($porcent_avaliado);
if (($contagen) > 3){
$porcent_avaliado = substr("$porcent_avaliado", 0, -11);
}
$contagen =strlen($porcent_Arquivado);
if (($contagen) > 3){
$porcent_Arquivado = substr("$porcent_Arquivado", 0, -11);
}
$contagen =strlen($porcent_Novo);
if (($contagen) > 3){
$porcent_Novo = substr("$porcent_Novo", 0, -11);
}






//Area pretendida
$SEGURANÇA ="Segurança";
$Segurança = base64_encode($SEGURANÇA);
$sql = mysql_query ("SELECT * FROM usuario WHERE Areapre = '$Segurança' ");
$totalSegurança = mysql_num_rows($sql);


$VENDAS ="Vendas";
$Vendas = base64_encode($VENDAS);
$sql = mysql_query ("SELECT * FROM usuario WHERE Areapre = '$Vendas' ");
$totalVendas = mysql_num_rows($sql);


$ESCRITORIO ="Escritorio";
$Escritorio = base64_encode($ESCRITORIO);
$sql = mysql_query ("SELECT * FROM usuario WHERE Areapre = '$Escritorio' ");
$totalEscritorio = mysql_num_rows($sql);


$ESTOQUE ="Estoque";
$Estoque = base64_encode($ESTOQUE);
$sql = mysql_query ("SELECT * FROM usuario WHERE Areapre = '$Estoque' ");
$totalEstoque = mysql_num_rows($sql);


$OPERADOR_DE_CAIXA ="Operador de caixa";
$Operador_de_caixa = base64_encode($OPERADOR_DE_CAIXA);
$sql = mysql_query ("SELECT * FROM usuario WHERE Areapre = '$Operador_de_caixa' ");
$totalOperador = mysql_num_rows($sql);


$CREDIARIO ="Crediario";
$Crediario = base64_encode($CREDIARIO);
$sql = mysql_query ("SELECT * FROM usuario WHERE Areapre = '$Crediario' ");
$totalCrediario = mysql_num_rows($sql);


$PROVADORES ="Provadores";
$Provadores = base64_encode($PROVADORES);
$sql = mysql_query ("SELECT * FROM usuario WHERE Areapre = '$Provadores' ");
$totalProvadores = mysql_num_rows($sql);


//Regioes
// Região Norte
$AMAZONAS    ="Amazonas";
$RORAIMA     ="Roraima";
$AMAPA       ="Amapá";
$PARA        ="Pará";
$TOCANTINS   ="Tocantis";
$RONDONIA    ="Rondônia";
$ACRE        ="Acre";


// Região Nordeste
$MARANHAO   ="Maranhão";
$PIAUI      ="Piauí";
$CEARA      ="Ceará";
$RIO_GRANDE_DO_NORTE ="Rio Grande do Norte";
$PERNANBUCO ="Pernanbuco";
$PARAIBA    ="Paraíba";
$SERGIPE    ="Sergipe";
$ALAGOAS    ="Alagoas";
$BAHIA      ="Bahia";

//Região Centro Oeste
$DISTRITO_FEDERAL   ="Distrito Federal";
$MATO_GROSSO        ="Mato Grosso";
$MATO_GROSSO_DO_SUL ="Mato Grosso do Sul";
$GOIAS              ="Goiás";

//Região Sudeste
$SAO_PAULO   ="São Paulo";
$RIO_DE_JANEIRO ="Rio de Janeiro";
$ESPIRITO_SANTO ="Espírito Santo";
$MINAS_GERAIS   ="Minas Gerais";


//Região Sul
$PARANA              ="Paraná";
$RIO_GRANDE_DO_SUL   ="Rio Grande do Sul";
$SANTA_CATARINA      ="Santa Catarina";

//criptografia
//-------------------------------------------------------
// Região Norte
$Amazonas    = base64_encode($AMAZONAS);
$Roraima     =base64_encode($RORAIMA);
$Amapa       =base64_encode($AMAPA);
$Para        =base64_encode($PARA);
$Tocantins   =base64_encode($TOCANTINS);
$Rondonia    =base64_encode($RONDONIA);
$Acre        =base64_encode($ACRE);


// Região Nordeste
$Maranhao   =base64_encode($MARANHAO);
$Piaui      =base64_encode($PIAUI);
$Ceara      =base64_encode($CEARA);
$Rio_grande_do_sul =base64_encode($RIO_GRANDE_DO_SUL);
$Pernanbuco =base64_encode($PERNANBUCO);
$Paraiba    =base64_encode($PARAIBA);
$Sergipe    =base64_encode($SERGIPE);
$Alagoas    =base64_encode($ALAGOAS);
$Bahia      =base64_encode($BAHIA) ;

//Região Centro Oeste
$Distrito_federal   =base64_encode($DISTRITO_FEDERAL);
$Mato_grosso        =base64_encode($MATO_GROSSO);
$Mato_grosso_do_sul =base64_encode($MATO_GROSSO_DO_SUL);
$Goias              =base64_encode($GOIAS);

//Região Sudeste
$Sao_paulo      =base64_encode($SAO_PAULO);
$Rio_de_janeiro =base64_encode($RIO_DE_JANEIRO);
$Espirito_santo =base64_encode($ESPIRITO_SANTO);
$Minas_gerais   =base64_encode($MINAS_GERAIS);


//Região Sul
$Parana              =base64_encode($PARANA);
$Rio_grande_do_sul   =base64_encode($RIO_GRANDE_DO_SUL);
$Santa_catarina     =base64_encode($SANTA_CATARINA);;
 
// sql de busca por estado
//total região norte
$sql = mysql_query ("SELECT * FROM usuario WHERE UF = '$Amazonas' OR UF ='$Roraima' OR UF = '$Amapa' OR UF = '$Tocantins' OR UF = '$Rondonia' OR UF = '$Acre' ");
$totalRNORTE = mysql_num_rows($sql);

//total reigão nordeste
$sql = mysql_query ("SELECT * FROM usuario WHERE UF = '$Maranhao' OR UF ='$Piaui' OR UF = '$Ceara' OR UF = '$Rio_grande_do_sul' OR UF = '$Pernanbuco' OR UF = '$Paraiba'  OR UF = '$Sergipe' OR UF = '$Alagoas' OR UF = '$Bahia'");
$totalRNORDESTE = mysql_num_rows($sql);

//total reigão centro oeste
$sql = mysql_query ("SELECT * FROM usuario WHERE UF = '$Distrito_federal' OR UF ='$Mato_grosso' OR UF = '$Mato_grosso_do_sul' OR UF = '$Goias'");
$totalRCENTRO_OESTE = mysql_num_rows($sql);

//total reigão sudeste
$sql = mysql_query ("SELECT * FROM usuario WHERE UF = '$Sao_paulo' OR UF ='$Rio_de_janeiro' OR UF = '$Espirito_santo' OR UF = '$Minas_gerais'");
$totalRSUDESTE = mysql_num_rows($sql);

//total sul
$sql = mysql_query ("SELECT * FROM usuario WHERE UF = '$Parana' OR UF ='$Rio_grande_do_sul' OR UF = '$Santa_catarina'");
$totalRSUL = mysql_num_rows($sql);


?>




<div align="center"><img src="Logo FAST RH.png" />
</div>
<p align="center">&nbsp;</p>
<div align="center">
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
      <td bgcolor="#FFFFFF"><?php echo $totalsexom ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalsexof ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalManha ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalIntermediario ?> </td>
      <td bgcolor="#FFFFFF"><?php echo $totalNoite ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalSolteiro ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalCasado ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalDivorciado ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalContratado ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalEm_andamento ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalEm_Avaliado ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalEm_Arquivado ?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><?php echo $porcent_sexo1 ?> %</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_sexo2 ?> %</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_TUR_MANHA ?> %</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_TUR_INTER ?> %</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_TUR_NOITE ?> %</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_solteiro ?> %</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_casado ?> %</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_divorciado ?> %</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_contratado ?> %</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_em_andamento ?> %</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_avaliado ?> %</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_Arquivado ?> %</td>
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
      <td bgcolor="#FFFFFF"><?php echo $conlin ?></td>
      <td bgcolor="#FFFFFF"><?php echo $total_Novo ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalRSUL ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalRNORDESTE ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalRCENTRO_OESTE ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalRSUDESTE ?></td>
      <td bgcolor="#FFFFFF"><?php echo $totalRNORTE ?></td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF"><?php echo $porcent_Novo ?></td>
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
  <p>&nbsp;</p>
</div>
<p>
<div align="center">
  <table width="727" height="721" border="0" background="mapa.png">
    <tr>
      <td width="57">&nbsp;</td>
      <td width="57">&nbsp;</td>
      <td width="57">&nbsp;</td>
      <td width="145">&nbsp;</td>
      <td width="42">&nbsp;</td>
      <td width="130">&nbsp;</td>
      <td width="57">&nbsp;</td>
      <td width="78">&nbsp;</td>
      <td width="66">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo $totalRNORTE ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo $totalRNORDESTE ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="109">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo $totalRCENTRO_OESTE ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo $totalRSUDESTE ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><?php echo $totalRSUL ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
<div align="center">
  <table width="326" border="0">
    <tr>
      <td width="156" height="15"><div align="center"><form id="form3" name="form3" method="post" target="_blank" action="Gera-pdf-relatorio.php?totalsexom=<?php echo $totalsexom ?>&totalsexof=<?php echo $totalsexof ?>&totalManha=<?php echo $totalManha ?>&totalIntermediario=<?php echo $totalIntermediario ?>&totalNoite=<?php echo $totalNoite ?>&totalSolteiro=<?php echo $totalSolteiro ?>&totalCasado=<?php echo $totalCasado ?>&totalDivorciado=<?php echo $totalDivorciado ?>&totalContratado=<?php echo $totalContratado ?>&totalEm_andamento=<?php echo $totalEm_andamento ?>&totalEm_Avaliado=<?php echo $totalEm_Avaliado ?>&totalEm_Arquivado=<?php echo $totalEm_Arquivado ?>&porcent_sexo1=<?php echo $porcent_sexo1 ?>&porcent_sexo2=<?php echo $porcent_sexo2 ?>&porcent_TUR_MANHA=<?php echo $porcent_TUR_MANHA ?>&porcent_TUR_INTER=<?php echo $porcent_TUR_INTER ?>&porcent_TUR_NOITE=<?php echo $porcent_TUR_NOITE ?>&porcent_solteiro=<?php echo $porcent_solteiro ?>&porcent_casado=<?php echo $porcent_casado ?>&porcent_divorciado=<?php echo $porcent_divorciado ?>&porcent_contratado=<?php echo $porcent_contratado ?>&porcent_em_andamento=<?php echo $porcent_em_andamento ?>&porcent_avaliado=<?php echo $porcent_avaliado ?>&porcent_Arquivado=<?php echo $porcent_Arquivado ?>&conlin=<?php echo $conlin ?>&total_Novo=<?php echo $total_Novo ?>&totalRNORTE=<?php echo $totalRNORTE ?>&totalRNORDESTE=<?php echo $totalRNORDESTE ?>&totalRCENTRO_OESTE=<?php echo $totalRCENTRO_OESTE ?>&totalRSUDESTE=<?php echo $totalRSUDESTE ?>&totalRSUL=<?php echo $totalRSUL ?>&porcent_Novo=<?php echo $porcent_Novo ?>">
	 
        <label></label>
        <input name="GERA PDF" type="image" src="Printer-icon.png" align="center" width="70" height="60" />
      </form></div>
          </form></td>
      <form id="form1" name="form1" method="post" action="consulta-provas.php">
        <td width="156" height="26"><label for="Submit"></label>
            <div align="center">
              <input type="image" name="imageField222" src="Bot&atilde;o voltar.png" width="150"  height="30"/>
          </div></td>
      </form>
      <td></td></td>
    </tr>
  </table>
</div>
<p>
<p>&nbsp;</p>

<?
include "conecta-banco.php";

$MAS ="Masculino";
$mas =base64_encode ($MAS);

$sql = mysql_query("SELECT * FROM usuario WHERE  sexo LIKE '%".$mas."%' ");

$numRegistros = mysql_num_rows($sql);
 
if ($numRegistros != 0) {

while ($row = mysql_fetch_assoc($sql)) {

echo ''.base64_decode( $row ['nome']).''
echo ''.base64_decode( $row ['cpf']).''

?>