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
  <form action="logoff-funcao.php" method="post" name="logoff" id="logoff">
    <div align="right">
      <input type="submit" name="Submit2" value="FINALIZAR SESS&Atilde;O" />
    </div>
	
	
  </form>
  <div align="right">
    <table width="1340" border="0">
      <tr>
        <td width="260">&nbsp;</td>
        <td width="810"><div align="center"><img src="Logo FAST RH.png" alt="FAST RH" width="313"  height="147" /></div></td>
        <td width="19">&nbsp;</td>
        <td width="233"><form id="form1" name="form1" method="post" action="alterar avaliador.php?row=<?php echo '$logado' ?>">

          <div align="right">
            <input name="ATUALIZAR CADASTRO" type="image" src="cadastro.png"  alt="ALTERAR AVALIADOR" align="right" width="70" height="60" />
                 </div>
        </form></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><form id="form2" name="form2" method="post" action="Relatorios.php">
          <label>
            <div align="right">
<input name="imageField" type="image" src="JasperReports.png" align="right" width="70" height="60" />
            </div>
          </label>
        </form>        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><form action="consulta-provas.php" method="post" name="consulta" id="consulta">
          <div align="center">
            <table width="200" border="0">
              <tr>
                <td><input type="text" name="nome" id="nome" size="60" placeholder="Digite o nome, Status ou UF:" maxlength="60" />                </td>
                <td><input type="hidden" name="data1" id="data1" size="10" maxlength="10" placeholder="xx/xx/xx" />                </td>
                <td>&nbsp;</td>
                <td><input type="hidden" name="data2" id="data2" size="10" maxlength="10" placeholder="xx/xx/xx" />                </td>
                <td></td>
                <td bgcolor=""><input name="imageField2" type="image" src="magnifying-glass-icon-35801.png" alt="PESQUISAR" align="right" width="70" height="60">                </td>
              </tr>
            </table>
          </div>
        </form></td>
        <td>&nbsp;</td>
        <td><form id="form3" name="form3" method="post" action="Gera-backup.php">
          <label>
            <div align="right">
<input name="imageField" type="image" src="backup.png" align="right" width="70" height="65"  />
            </div>
          </label>
        </form>        </td>
      </tr>
    </table>
    <div align="center"></div>
  </div>
  <div align="center">
          <table width="730" border="0">
            <tr>
              <td width="497" bgcolor="#999999"><div align="center"><strong>NOME:</strong></div></td>
              <td width="87" bgcolor="#999999"><strong>M&Eacute;DIA:</strong></td>
              <td width="132" bgcolor="#999999"><strong>STATUS:</strong></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#FFFFFF"><div align="center">
			  <div style="overflow: auto; width: 825px; height: 400px; ">
<?php

include "conecta-banco.php";

@$nome    =$_POST["nome"]; 
@$data1   =$_POST["data1"]; 
@$data2   =$_POST["data2"]; 


@$filtro  =base64_encode($nome); 
@$filtro2 =base64_encode($nome);


$sql = mysql_query("SELECT * FROM usuario WHERE  nome LIKE '%".$nome."%' OR status LIKE '%".$filtro."%' OR UF LIKE '%".$filtro2."%' ORDER BY `nome` ASC "); 
//$sql = mysql_query("SELECT * FROM usuario WHERE data BETWEEN '$data1.' AND '$data2' or nome LIKE '%".$nome."%' ORDER BY `nome` ASC "); 

$numRegistros = mysql_num_rows($sql);
 
if ($numRegistros != 0) {

while ($row = mysql_fetch_assoc($sql)) {

echo' <table width="800" border="1" bordercolor="#FFFFFF"" bgcolor="#FFFFFF">';
echo'	  <tr>';
echo'	  <td width="603">'.( $row ['nome']).'</td>';
echo'      <td width="300"><a href="exibir usuario.php?row='. $row ['cpf'].'"> <input name="" type="button"  value="DETALHES"/></a> ';
echo' <a href="comfirma-excluir.php?row='. $row ['cpf'].'"><input name="" type="button"  value="EXCLUIR"/> </td>' ;


$calc1= $row['totalmat'] + $row['totalport'] + $row['totalrac'];
$media =($calc1/3);
$contagen =strlen( $media); 

if (($contagen) > 3){
$media = substr("$media", 0, -11);
}
echo' <td width="170" bgcolor="#00FF66">'.$media.'</td>
<td width="195">'.base64_decode( $row ['status']).'</td>';    
echo'    </table>';
}
}else{
echo "<script>alert ('Nenhum registro encontrado')</script>"; 
}

?></td>
            </tr>
    </table>
  </div>
    <p align="center">&nbsp;</p>
  