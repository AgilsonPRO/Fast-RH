<?php
session_start();
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	unset($_SESSION['cpf']);
	unset($_SESSION['nome']);
	
echo "<script>alert ('SESS�O FINALIZADA COM SUCESSO')</script>"; 			
}
include "Pagina inicial.php";	
?>	