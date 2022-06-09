<style type="text/css">
<!--
body {
	background-color: #90C1E2;
}
-->
</style>
<p>&nbsp;</p>
<p>&nbsp;</p>
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
 
$sql = mysql_query("SELECT * FROM usuario WHERE cpf LIKE '%".$row."%' OR nome LIKE '%".$row."%' ");

if (mysql_num_rows ($sql) > 0){


$row = mysql_fetch_assoc($sql);

echo' <form id="form1" name="usuario" method="post" action="valida-usuario-alterar.php"/>';
echo' <p align="center"><img src="Logo FAST RH.png" width="303" height="117" align="middle" /></p>';
echo' <p align="center" class="style1"><strong>Alterar Usuário</strong> </p>';
echo' <div align="center">';
echo' <table width="720" border="0">';
echo'     <tr>';
echo'       <td width="136" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Nome Completo: </strong></td>';
echo'       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
         
echo'         <label for="label2"></label>';
echo'        <input type="text" name="nome" maxlength="60" size="60" id="nome" value="' .( $row['nome'] ). '" />         </td>';
echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>CPF:</strong></td>';
echo'       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
         
echo'         <label for="label3"></label>';
echo'      <input type="hidden" name="cpf" maxlength="11" size="11" id="cpf" value="' .base64_decode( $row['cpf']) . '" /> ';  
echo'        </td>';
echo'     </tr>';
echo'     <tr>';
echo'       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Data de nascimento: </strong></td>';
echo'       <td width="115" bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
         
 echo'        <label for="label4"></label>';
 echo'       <input type="text" name="datanascimento" maxlength="8" size="8" id="datanascimento" value="' .base64_decode( $row['datanascimento']) . '" />  </td>';
 echo'      <td width="96" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Sexo:</strong></td>';
 echo'      <td width="143" bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
         
 echo'        <label for="select"></label>';
 echo'        <select name="sexo" id="sexo" value="' .base64_decode( $row['sexo']) . '">';
  echo'         <option value="' .base64_decode( $row['sexo']) . '">' .base64_decode( $row['sexo']) . '</option>';
 echo'          <option value="Masculino">Masculino</option>';
 echo'	    <option value="Feminino">Feminino</option';
 echo'        ></select>        </td>';
 echo'      <td width="63" bordercolor="#CCCCCC" bgcolor="#CCCCCC"> <strong>Estado Civil: </strong></td>';
 echo'      <td width="127" bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
         
 echo'        <label for="label5"></label>';
 echo'        <select name="Ecivil" id="Ecivil" value="'. base64_decode($row['Ecivil']).'">';
 echo'          <option value="'.base64_decode($row['Ecivil']).'">'.base64_decode($row['Ecivil']).'</option>';
  echo'          <option value="Solteiro(a)">Solteiro(a)</option>';
 echo'          <option value="Casado(a)">Casado(a)</option>';
 echo'          <option value="Divorciado(a)">Divorciado(a)</option>';
 echo'       </select>        </td>';
 echo'    </tr>';
 echo'    <tr>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Telefone:</strong></td>';
 echo'     <td bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
         
 echo'        <label for="label6"></label>';
 echo'     <input type="text" name="telefone" maxlength="12" size="12" id="telefone" value="' .base64_decode( $row['telefone']) . '" placeholder="(xx) xxxx-xxxx"/>'; echo'       </td>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Recados:</strong></td>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
         
 echo'        <label for="label7"></label>';
 echo'       <input type="text" name="recado"  maxlength="12"  size="12" id="recado" value="' .base64_decode( $row['recado'] ). '" placeholder="(xx) xxxx-xxxx"  />'; echo'       </td>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>UF:</strong></td>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
 
 echo'          <select name="UF" id="UF" value="'.base64_decode($row['UF']).'">';
 echo'          <option value="'.base64_decode($row['UF']).'">'.base64_decode($row['UF']).'</option>';
 echo'          <option value="Alagoas">Alagoas</option>';
 echo'          <option value="Amapá">Amap&aacute;</option>';
 echo'          <option value="Amazonas">Amazonas</option>';
 echo'          <option value="Bahia">Bahia</option>';
 echo'          <option value="Ceará">Cear&aacute;</option>';
 echo'          <option value="Distrito Federal">Distrito Federal</option>';
 echo'          <option value="Espirito Santo">Esp&iacute;rito Santo</option>';
 echo'          <option value="Goiás">Goi&aacute;s</option>';
 echo'          <option value="Maranhão">Maranh&atilde;o</option>';
 echo'          <option value="Mato Grosso">Mato Grosso</option>';
 echo'          <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>';
 echo'          <option value="Minas Gerais">Minas Gerais</option>';
 echo'          <option value="Pará">Par&aacute;</option>';
 echo'          <option value="Paraíba">Para&iacute;ba</option>';
 echo'          <option value="Paraná">Paran&aacute;</option>';
 echo'          <option value="Pernanbuco">Pernambuco</option>';
 echo'          <option value="Piauí">Piau&iacute;</option>';
 echo'          <option value="Rio de Janeiro">Rio de Janeiro</option>';
 echo'          <option value="Rio Grande do Norte">Rio Grande do Norte</option>';
 echo'          <option value="Rio Grande do Sul">Rio Grande do Sul</option>';
 echo'          <option value="Rondônia">Rond&ocirc;nia</option>';
 echo'          <option value="Roraima">Roraima</option>';
 echo'         <option value="Santa Catarina">Santa Catarina</option>';
 echo'          <option value="São Paulo">S&atilde;o Paulo</option>';
 echo'          <option value="Sergipe">Sergipe</option>';
 echo'          <option value="Tocantins">Tocantins</option>';
 echo'        </select>';
 echo'    </td>';
 
 echo'    </tr>';
 echo'    <tr>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>E-mail:</strong></td>';
 echo'      <td colspan="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
         
 echo'        <label for="label8"></label>';
 echo'       <input type="text" name="email" size="60" maxlength="60" id="email" value="' .base64_decode( $row['email'] ). '" />        </td>';
 echo'    </tr>';
 //
 echo'<td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Escolaridade:</strong></td>';
 echo'       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC">';       
 echo'       <label for="label9"></label>';
 echo'        <select name="Escolaridade" id="Escolaridade" value="' .base64_decode( $row['Escolaridade'] ). '">';
 echo'        <option value="' .base64_decode( $row['Escolaridade']) . '">' .base64_decode( $row['Escolaridade']) . '</option>';
 echo'        <option value="Médio Completo">M&eacute;dio Completo</option>';
 echo'        <option value="Médio Incompleto">M&eacute;dio Incompleto</option>';
 echo'        <option value="Médio Cursando">M&eacute;dio Cursando</option>';
 echo'        <option value="Superior Completo">Superior Completo</option>';
 echo'        <option value="Superior Incompleto">Superior Incompleto</option>';
 echo'        <option value="Superior Cursando">Superior Cursando</option>';
 echo'        <option value="Fundamental Completo">Fundamental Completo</option>';
 echo'        <option value="Fundamental Incompleto">Fundamental Incompleto</option>';
 echo'        <option value="Fundamental Cursando">Fundamental Cursando</option>';
 echo'        <option value="Pós-Graduação Completo">P&oacute;s-Gradua&ccedil;&atilde;o Completo</option>';
 echo'        <option value="Pós-Graduação Incompleto">P&oacute;s-Gradua&ccedil;&atilde;o Incompleto</option>';
 echo'        <option value="Pós-Graduação Cursando">P&oacute;s-Gradua&ccedil;&atilde;o Cursando</option>';
 echo'       </select>        </td>';
//
 
 echo'    <tr>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Endere&ccedil;o:</strong></td>';
 echo'      <td colspan="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
 echo'        <label for="label12"></label>';
 echo'       <input type="text" name="endereco" size="60" maxlength="60" id="endereco" value="' .base64_decode( $row['endereco']) . '"/>       </td>';
 echo'    </tr>';
 echo'    <tr>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Dispoibilidade de Hor&aacute;rio: </strong></td>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
         
 echo'       <label for="label9"></label>';
 echo'        <select name="Dishorario" id="Dishorario" value="' .base64_decode( $row['Dishorario'] ). '">';
 echo'          <option value="' .base64_decode( $row['Dishorario'] ). '">' .base64_decode( $row['Dishorario'] ). '</option>';
 echo'          <option value="Manh&atilde">Manhã</option>';
 echo'          <option value="Noite">Noite</option>';
 echo'          <option value="Intermediario">Intermediario</option>';
 echo'       </select>        </td>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>&Aacute;rea pretendida: </strong></td>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC">';
         
 echo'        <label for="label10"></label>';
 echo'        <select name="Areapre" id="Areapre" value="'.base64_decode( $row['Areapre']).'">';
 echo'          <option value="'. base64_decode($row['Areapre']).'">'. base64_decode($row['Areapre']).'</option>';
 echo'          <option value="Segurança">Segurança</option>';
 echo'          <option value="Vendas">Vendas</option>';
 echo'          <option value="Escritorio">Escritório</option>';
echo'           <option value="Estoque">Estoque</option>';
echo'           <option value="Operador de caixa">Operador de caixa</option>';
echo'           <option value="Crediario">Crediario</option>';
 echo'          <option value="Provadores">Provadores</option>';
 echo'       </select>        </td>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Filhos:</strong></td>';
 echo'      <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><select name="filhos" id="filhos" value="' .base64_decode( $row['filhos']) . '">';
 echo'	     <option value="'.base64_decode( $row['filhos'] ). '">' . base64_decode($row['filhos']) . '</option>';
echo'	     <option value="Nenhum">Nenhum</option>';
echo'         <option value="1">1</option>';
echo'         <option value="2">2</option>';
echo'         <option value="3">3</option>';
echo'		 <option value="4">4</option>';
echo'		 <option value="5">5</option>';
echo'		 <option value="6">6</option>';
echo'		 <option value="Mais que 6">Mais que 6</option>';
		 
echo'       </select></td>';
echo'     </tr>';

echo'    </table>';
echo' </div>';
echo'   <label for="label11"></label>';
echo'   <div align="center">';
echo'    <div align="center">';
echo'      <table width="326" border="0">';
echo'        <tr>';
echo'          <td width="156" height="15">';
echo'            <div align="center">';
echo'<input type="image" name="imageField22" src="Botão Salvar.png" width="150"  height="30"/>';           
echo'            </div>';
echo' </form></td>';
echo' <form id="form1" name="form1" method="post" action="Visualiza-resultado.php">';
echo'          <td width="156" height="26"> ';
echo'            <label for="Submit"></label>';
echo'            <div align="center">';
echo'<input type="image" name="imageField22" src="Botão voltar.png" width="150"  height="30"/>';
echo'            </div>';
echo'          </form>        </td>';
echo'        </tr>';
echo'      </table>';
echo'    </div>';
}

?>
