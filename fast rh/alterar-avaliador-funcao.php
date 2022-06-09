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
include  "conecta-banco.php";

if($_SERVER['REQUEST_METHOD']=='POST'){

@$NOME           =isset($_POST["nome"]) ? $_POST['nome'] : ''; 
@$CPF            =isset($_POST["cpf"]) ? $_POST['cpf'] : '';   
@$TELEFONE       =isset($_POST["telefone"]) ? $_POST['telefone'] : ''; ;
@$EMAIL          =isset($_POST["email"]) ? $_POST['email'] : '';
@$LOGIN          =isset($_POST["login"]) ? $_POST['login'] : '';
@$SENHA          =isset($_POST["senha"]) ? $_POST['senha'] : '';

@$nome     = base64_encode ($NOME);
@$cpf      = base64_encode ($CPF);  
@$telefone = base64_encode ($TELEFONE);
@$email    = base64_encode ($EMAIL);
@$login    = base64_encode ($LOGIN);
@$senha    = base64_encode ($SENHA);



$sql = ("UPDATE avaliador SET nome='$nome', cpf='$cpf', telefone='$telefone',email='$email',login='$login',senha='$senha' WHERE cpf LIKE '%".$cpf."%'")or die(mysql_error());


$resultado = mysql_query($sql);

echo "<script>alert ('SEUS DADOS FORAM ATUALIZADOS COM SUCESSO!')</script>"; 
echo "<script> location.href=('consulta-provas.php') </script>";
exit();
}
?>