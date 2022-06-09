<?php

include  "conecta-banco.php";

$nome             =$_POST["nome"];
@$cpf             =$_POST["cpf"];
@$datanascimento  =$_POST["datanascimento"];
@$telefone        =$_POST["telefone"];
@$recado          =$_POST["recado"];
@$email           =$_POST["email"];
@$endereco        =$_POST["endereco"];
@$Escolaridade    =$_POST["Escolaridade"];
@$UF              =$_POST["UF"];

$totalport        =$_GET["totalport"];
$totalmat         =$_GET["totalmat"];
$totalrac         =$_GET["totalrac"];
$erro           = 0;


if (empty($nome) or  strstr($nome,' ')==FALSE)
{ $erro="1";}
else
if (empty($cpf) or ($cpf)<12)
{ $erro="2";}
else
if (($telefone)<12)
{ $erro="3";}
else
if (($recado)<12)
{ $erro="4";}
else
if (empty($email) or strstr ($email,'@')==FALSE)
{ $erro="5";}
else
if (empty($endereco))
{ $erro="6";}
else
if (empty($UF))
{ $erro="7";}
else
if (empty($datanascimento))
{ $erro="8";}




else{
 include 'cadastro-usuario-funcao.php';
} 



if ($erro == "1") { $msg="<script>alert ('Dados do campo NOME inválidos ou não preenchidos.')</script>"; }

if ($erro == "2") { $msg="<script>alert ('Dados do campo CPF inválidos ou não preenchidos.')</script>"; }

if ($erro == "3") { $msg="<script>alert ('Dados do campo TELEFONE inválidos ou não preenchidos.')
</script>"; }

if ($erro == "4") { $msg="<script>alert ('Dados do campo RECADO inválidos ou não preenchidos.')
</script>"; }

if ($erro == "5") { $msg="<script>alert ('Dados do campo E-MAIL inválidos ou não preenchidos.')
</script>"; }

if ($erro == "6") { $msg="<script>alert ('Dados do campo ENDEREÇO inválidos ou não preenchidos.')
</script>"; }

if ($erro == "7") { $msg="<script>alert ('Dados do campo UF inválidos ou não preenchidos.')
</script>"; }

if ($erro == "8") { $msg="<script>alert ('Dados do campo DATA DE NASCIMENTO inválidos ou não preenchidos.')
</script>"; }


echo $msg; 
echo "<script> location.href=('Cadastro usuario.php') </script>";
 
?>
