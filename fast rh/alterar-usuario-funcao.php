<?php
include  "conecta-banco.php";

if($_SERVER['REQUEST_METHOD']=='POST'){

$nome           =isset($_POST["nome"]) ? $_POST['nome'] : ''; 
$CPF            =isset($_POST["cpf"]) ? $_POST['cpf'] : '';   
$SEXO           =isset($_POST["sexo"]) ? $_POST['sexo'] : ''; 
$ECIVIL         =isset($_POST["Ecivil"]) ? $_POST['Ecivil'] : '';
$DATANASCIMENTO =isset($_POST["datanascimento"]) ? $_POST['datanascimento']:'';
$TELEFONE       =isset($_POST["telefone"]) ? $_POST['telefone'] : '';
$RECADO         =isset($_POST["recado"]) ? $_POST['recado'] : '';
$EMAIL          =isset($_POST["email"]) ? $_POST['email'] : '';
$ESCOLARIDADE   =isset($_POST["Escolaridade"]) ? $_POST['Escolaridade'] : '';
$uf             =isset($_POST["UF"]) ? $_POST['UF'] : '';
$ENDERECO       =isset($_POST["endereco"]) ? $_POST['endereco'] : '';
$DISHORARIO     =isset($_POST["Dishorario"]) ? $_POST['Dishorario'] : '';
$AREAPRE        =isset($_POST["Areapre"]) ? $_POST['Areapre'] : '';
$FILHOS         =isset($_POST["filhos"]) ? $_POST['filhos'] : '';



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
$UF              =base64_encode($uf);;
@$Comentario      =base64_encode($COMENTARIO);


$sql = ("UPDATE usuario SET nome='$nome', cpf='$cpf', sexo='$sexo',Ecivil='$Ecivil',datanascimento='$datanascimento',telefone='$telefone',recado='$recado',email='$email',Escolaridade='$Escolaridade',UF='$UF',endereco='$endereco',Dishorario='$Dishorario',Areapre='$Areapre',filhos='$filhos' WHERE cpf LIKE '%".$cpf."%'")or die(mysql_error());


$resultado = mysql_query($sql);

echo "<script>alert ('SEUS DADOS FORAM ATUALIZADOS COM SUCESSO!')</script>"; 
echo "<script> location.href=('Visualiza-resultado.php') </script>";
exit();
}
?>