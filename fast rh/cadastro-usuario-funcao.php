
<?php

include  "conecta-banco.php";


$CPF             =$_POST["cpf"];
$SEXO            =$_POST["sexo"];
$ECIVIL          =$_POST["Ecivil"];
$DATANASCIMENTO  =$_POST["datanascimento"];
$TELEFONE        =$_POST["telefone"];
$RECADO          =$_POST["recado"];
$EMAIL           =$_POST["email"];
$ENDERECO        =$_POST["endereco"];
$DISHORARIO      =$_POST["Dishorario"];
$AREAPRE         =$_POST["Areapre"];
$FILHOS          =$_POST["filhos"];
$ESCOLARIDADE    =$_POST["Escolaridade"];
$uf              =$_POST["UF"];
@$COMENTARIO     ="SEJA O PRIMEIRO A COMENTAR";

$totalport       =$_GET["totalport"];
$totalmat        =$_GET["totalmat"];
$totalrac        =$_GET["totalrac"];
$STATUS          =$_GET["status"];           
$data            =date("y-m-d");

$nome            =$_POST["nome"];
$cpf             =base64_encode($CPF);
$sexo            =base64_encode($SEXO);
$Ecivil          =base64_encode($ECIVIL);
$datanascimento  =base64_encode($DATANASCIMENTO);
$telefone        =base64_encode($TELEFONE);
$recado          =base64_encode($RECADO);
$email           =base64_encode($EMAIL);
$endereco        =base64_encode($ENDERECO);
$Dishorario      =base64_encode($DISHORARIO);
$Areapre         =base64_encode($AREAPRE);
$filhos          =base64_encode($FILHOS);
$Escolaridade    =base64_encode($ESCOLARIDADE);
$UF              =base64_encode($uf);
@$Comentario     =base64_encode($COMENTARIO);

$status          =base64_encode($STATUS);




$sql = "INSERT INTO usuario VALUES";
$sql .= "('$nome','$cpf','$sexo','$Ecivil','$datanascimento','$telefone','$recado','$email','$endereco','$Dishorario','$Areapre','$filhos','$Escolaridade','$UF','$Comentario','$totalport','$totalmat','$totalrac','$status','$data')";

$resultado = mysql_query($sql);

echo "<script>alert ('SEUS DADOS FORAM CADASTRADOS COM SUCESSO!')</script>"; 
echo "<script> location.href=('Tela fim questionario.php') </script>";
exit();

?>


