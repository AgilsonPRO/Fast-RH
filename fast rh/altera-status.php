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


if($_SERVER['REQUEST_METHOD']=='POST'){
@$STATUS   = isset($_POST['status']) ? $_POST['status'] : '';

@$status   =base64_encode($STATUS);


@$row     =$_GET['row'];

if(empty($row)){
echo "<script>alert ('Usuário não encontrado.')</script>"; 
echo "<script> location.href=('exibir usuario.php') </script>";
}

$sql = ("UPDATE usuario SET status='$status'  WHERE cpf LIKE '%".$row."%' ")or die(mysql_error());


$resultado = mysql_query($sql);
   {
echo "<script>alert ('STATUS adicionado com sucesso')</script>"; 
echo "<script> location.href=('consulta-provas.php') </script>";
exit();
   }
}
?>
