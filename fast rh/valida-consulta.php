
<?php

include  "conecta-banco.php";

$nome    =$_POST["nome"];
$data1   =$_POST["data1"];
$data2   =$_POST["data2"];
$filtro  =$_POST["filtro"];
$erro           = 0;


if (empty($nome) or  strstr($nome,' ')==FALSE)
{ $erro="1";}



else{
 include 'consulta-provas.php';
} 



if ($erro == "1") { $msg="<script>alert ('Dados do campo NOME inv�lidos ou n�o preenchidos.')</script>"; }

if ($erro == "2") { $msg="<script>alert ('Dados do campo DATA1 inv�lidos ou n�o preenchidos.')</script>"; }



echo $msg; 
echo "<script> location.href=('consulta-provas.php') </script>";
 
?>