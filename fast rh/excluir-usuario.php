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



mysql_query("DELETE  FROM usuario WHERE cpf LIKE '%".$row."%'");
{
echo "<script>alert (' DADOS FORAM EXCLUIDOS COM SUCESSO!')</script>"; 
}
include "consulta-provas.php";

?>