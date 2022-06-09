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
<?php

include "conecta-banco.php";

$row =$_GET['row'];

if(empty($row)){
echo "<script>alert ('Usuário não encontrado.')</script>"; 
echo "<script> location.href=('consulta-provas.php') </script>";
}

 
$sql = mysql_query("SELECT * FROM usuario WHERE cpf LIKE '%".$row."%' ");

if (mysql_num_rows ($sql) > 0){


$row = mysql_fetch_assoc($sql);
}
?>

<style type="text/css">
<!--
body,td,th {
	font-weight: bold;
}
body {
	background-color: #90C1E2;
}
-->
</style> 
<fieldset>
<p align="center"><img src="Logo FAST RH.png" width="313" height="147" /></p>
<p align="center">DESEJA EXCLUIR ESTE REGISTRO? </p>
<div align="center">
  <table width="250" border="0">
    <tr>
      <td colspan="2" bgcolor="#FFFFFF"><?php echo'' .($row['nome']) . ' '?></td>
    </tr>
    <tr>
      <td width="120"><form id="form1" name="form1" method="post" action="excluir-usuario.php?row=<?php echo '' . $row['cpf'] . ' '  ?> ">
        <div align="center">
          <input type="submit" name="Submit" value="SIM" />
              </div>
      </form></td>
  
   <td width="120"><form id="form2" name="form2" method="post" action="consulta-provas.php">
     
     <div align="center">
       <input type="submit" name="Submit2" value="NÃO" />
        </div>
   </form></td>
   </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </fildset>
</div>
