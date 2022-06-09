<?php
include "conecta-banco.php";

session_start ();

$nome =$_POST['nome'];
$CPF =$_POST['cpf'];


$cpf  =base64_encode($CPF);


$result =mysql_query("SELECT *
FROM usuario
WHERE nome = '$nome'
AND cpf = '$cpf'");

if (mysql_num_rows ($result) > 0)
{

$_SESSION ['nome'] = $nome;
$_SESSION['cpf'] = $cpf;

header('location:Visualiza-resultado.php');
}

else
{
unset($_SESSION['nome']);

unset($_SESSION['cpf']);

echo "<script>alert ('NOME ou CPF incorretos, por favor tente novamente!')</script>"; 
echo "<script> location.href=('login-usuario.php') </script>";
}

?>