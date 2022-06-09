
<?php

include  "conecta-banco.php";

$NOME            =$_POST["nome"];
$CPF             =$_POST["cpf"];
$EMAIL           =$_POST["email"];
$TELEFONE        =$_POST["telefone"]; 
$LOGIN           =$_POST["login"];
$SENHA           =$_POST["senha"];


$nome             = base64_encode($NOME);
$cpf              = base64_encode($CPF);
$email            = base64_encode($EMAIL);
$telefone         = base64_encode($TELEFONE); 
$login            = base64_encode($LOGIN);
$senha            = base64_encode($SENHA);


$sql = "INSERT INTO avaliador VALUES";
$sql .= "('$nome','$cpf','$email','$telefone','$login','$senha')";

$resultado = mysql_query($sql);

echo "<script>alert ('SEUS DADOS FORAM CADASTRADOS COM SUCESSO!')</script>"; 
echo "<script> location.href=('Pagina inicial.php') </script>";
exit();

?>


