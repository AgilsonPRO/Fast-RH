
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

$COMENTARIO   =$_POST['COMENTARIO'] ;
$Comentario   =base64_encode($COMENTARIO); echo "$Comentario";


$ROW     =$_GET['row'];
$row     =base64_encode($ROW);

if(empty($row)){
echo "<script>alert ('Usuário não encontrado.')</script>"; 
echo "<script> location.href=('consulta-provas.php') </script>";
}

$sql = ("UPDATE usuario SET Comentario='$Comentario'  WHERE cpf LIKE '%".$row."%' ")or die(mysql_error());


$resultado = mysql_query($sql);
   {
echo "<script>alert ('COMENTARIO adicionado com sucesso')</script>"; 
echo "<script> location.href=('consulta-provas.php') </script>";
exit();
   }
}
?>