<?php
include "conecta-banco.php";

session_start ();

$LOGIN =$_POST['login'];
$SENHA =$_POST['senha'];

$login = base64_encode($LOGIN); 
$senha = base64_encode($SENHA);


$result =mysql_query("SELECT *
FROM avaliador
WHERE login = '$login'
AND senha = '$senha'");

if (mysql_num_rows ($result) > 0)
{

$_SESSION ['login'] = $login;
$_SESSION['senha'] = $senha;

header('location:consulta-provas.php');
}

else
{
unset($_SESSION['login']);

unset($_SESSION['senha']);

echo "<script>alert ('LOGIN ou SENHA incorretos, por favor tente novamente!')</script>"; 
echo "<script> location.href=('login-avaliador.php') </script>";
}

?>



