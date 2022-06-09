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

$logado= $_SESSION['senha'];
?>

<?php
include "conecta-banco.php";
 
$row = $logado;

if(empty($row)){
echo "<script>alert ('Avaliador  não encontrado.')</script>"; 
echo "<script> location.href=('consulta provas.php') </script>";
}
 
$sql = mysql_query("SELECT * FROM avaliador WHERE senha LIKE '%".$row."%' ");

if (mysql_num_rows ($sql) > 0){


$row = mysql_fetch_assoc($sql);




echo' <p align="center"><img src="Logo FAST RH.png" width="303" height="117" align="middle" /></p>';
echo' <p align="center" class="style1"><strong>Alterar Avaliador</strong> </p>';
echo' <div align="center">';
echo ' <table width="579" border="0">';
echo ' <tr>';
echo '<form name="form1" method="post" action="valida-avaliador-alterar.php">';
echo '      <td width="129" bgcolor="#CCCCCC"><strong>Nome Completo: </strong></td>';
echo '      <td width="440" bgcolor="#CCCCCC">';
echo '        <label for="textfield"></label>';
echo'        <input type="text" name="nome" maxlength="60" size="60" id="nome" value="' .base64_decode( $row['nome']) . '" />         </td>';
echo '     </tr>';
echo '     <tr>';
echo '       <td bgcolor="#CCCCCC"><strong>CPF:</strong></td>';
echo '       <td bgcolor="#CCCCCC"><input type="hidden" name="cpf" size="11" maxlength="11" id="cpf"  value=' .base64_decode( $row['cpf']). '></td>';
echo '     </tr>';
echo '     <tr>';
echo '       <td bgcolor="#CCCCCC"><strong>E-mail:</strong></td>';
echo '       <td bgcolor="#CCCCCC"><input type="text" name="email" size="60" maxlength="60" id="email" value=' .base64_decode ($row['email'] ). '> </td>';
echo '     </tr>';
echo '     <tr>';
echo '       <td bgcolor="#CCCCCC"><strong>Confir. E-mail </strong></td>';
echo '       <td bgcolor="#CCCCCC"><input type="text" name="email2" size="60" maxlength="60" id="email2" /></td>';
echo '     </tr>';
echo '     <tr>';
echo '       <td bgcolor="#CCCCCC"><strong>Telefone:</strong></td>';
echo '       <td bgcolor="#CCCCCC"><input type="text" name="telefone" size="12" maxlength="12" id="telefone" placeholder="(xx) xxxx-xxxx"  value=' . base64_decode ($row['telefone'] ). '></td>';
echo '     </tr>';
echo '     <tr>';
echo '       <td bgcolor="#CCCCCC"><strong>Login:</strong></td>';
echo '       <td bgcolor="#CCCCCC"><input type="text" name="login" size="20" maxlength="20" id="login"  value=' .base64_decode( $row['login']) . '></td>';
echo '     </tr>';
echo '     <tr>';
echo '       <td bgcolor="#CCCCCC"><strong>Senha:</strong></td>';
echo '       <td bgcolor="#CCCCCC"><input type="password" name="senha" size="20" maxlength="12" id="senha"  value=' .base64_decode( $row['senha'] ). '></td>';
echo '     </tr>';
echo '     <tr>';
echo '       <td bgcolor="#CCCCCC"><strong>Confirma senha: </strong></td>';
echo '       <td bgcolor="#CCCCCC"><input type="password" name="senha2" size="20" maxlength="12" id="senha2"></td>';
echo '     </tr>';
echo '     <tr>';
echo '       <td colspan="2">';
echo '         <label for="Submit"></label>       </td>';
echo '     </tr>';


echo '    </table>';
echo ' </div>';
echo '   <label for="label11"></label>';
echo '   <div align="center">';
echo '    <div align="center">';
echo '      <table width="326" border="0">';
echo '        <tr>';
echo '          <td width="156" height="15">';
echo '            <div align="center">';
echo '            <input type="image" name="imageField22" src="Botão salvar.png" width="150"  height="30"/>';
echo '            </div>';
echo ' </form></td>';
echo ' <form id="form1" name="form1" method="post" action="consulta-provas.php">';
echo '          <td width="156" height="26"> ';
echo '            <label for="Submit"></label>';
echo '            <div align="center">';
echo '            <input type="image" name="imageField22" src="Botão voltar.png" width="150"  height="30"/>';
echo '            </div>';
echo '          </form>        </td>';
echo '        </tr>';
echo '      </table>';
echo '    </div>';
}
?>