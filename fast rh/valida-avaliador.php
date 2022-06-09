<?php

include  "conecta-banco.php";

@$nome            =$_POST["nome"];
@$cpf             =$_POST["cpf"];
@$telefone        =$_POST["telefone"]; 
@$email           =$_POST["email"];
@$email2          =$_POST["email2"];
@$login           =$_POST["login"];
@$senha           =$_POST["senha"];
@$senha2          =$_POST["senha2"];

$erro           = 0;


if (empty($nome) or  strstr($nome,' ')==FALSE)
{ $erro="1";}
else
if (empty($cpf) or ($cpf)<12)
{ $erro="2";}
else
if (empty($email) or strstr ($email,'@')==FALSE)
{ $erro="3";}
else
if (($telefone)<12)
{ $erro="4";}
else
if (empty($login)) 
{ $erro="5";}
else
if (empty($senha) or ($senha)<12)
{ $erro="6";}
else
if (empty($senha2) or ($senha<12) or ($senha2!=$senha))
{ $erro="7";}
else
if (empty($email2) or  ($email!=$email2))
{ $erro="8";}




else{
 include 'cadastro-avaliador-funcao.php';
} 



if ($erro == "1") { $msg="<script>alert ('Dados do campo NOME inválidos ou não preenchidos.')</script>"; }

if ($erro == "2") { $msg="<script>alert ('Dados do campo CPF inválidos ou não preenchidos.')</script>"; }

if ($erro == "3") { $msg="<script>alert ('Dados do campo E-MAIL inválidos ou não preenchidos.')
</script>"; }

if ($erro == "4") { $msg="<script>alert ('Dados do campo TELEFONE inválidos ou não preenchidos.')
</script>"; }

if ($erro == "5") { $msg="<script>alert ('Dados do campo LOGIN inválidos ou não preenchidos.')
</script>"; }

if ($erro == "6") { $msg="<script>alert ('Dados do campo SENHA inválidos ou não preenchidos.')
</script>"; }

if ($erro == "7") { $msg="<script>alert ('Dados do campo COMFIRMA SENHA inválidos ou não preenchidos.')
</script>"; }

if ($erro == "8") { $msg="<script>alert ('Dados do campo COMFIRMA E-MAIL inválidos ou não preenchidos.')
</script>"; }

echo $msg; 
echo "<script> location.href=('Cadastro avaliador.php') </script>";
 
?>
