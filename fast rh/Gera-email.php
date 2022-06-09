<?
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
@$nome        =$_GET['nome'];
@$mensagem    =$_POST['mensagem'];
@$com_copia   =$_POST['com_copia'];
@$email       =$_GET['email'];


require_once('phpmailer/class.phpmailer.php'); //chama a classe de onde você a colocou.
require ('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer(); // instancia a classe PHPMailer

$mail->IsSMTP();

//configuração do gmail
$mail->Port = '587'; //porta usada pelo gmail.
$mail->Host = 'smtp.gmail.com'; 
$mail->IsHTML(true); 
$mail->Mailer = 'smtp'; 
$mail->SMTPSecure = 'tls';

//configuração do usuário do gmail
$mail->SMTPAuth = true; 
$mail->Username = 'agilson.profissional@gmail.com'; // usuario gmail.   
$mail->Password = '21442924'; // senha do email.

$mail->SingleTo = true; 

// configuração do email a ser enviado.
$mail->From     = $email; 
$mail->FromName = $nome; 

$mail->addAddress("agilson.profissional@gmail.com"); // email do destinatario.
$mail->AddCC = $com_copia; 

$mail->Subject = "FAST RH (COMUNICADO)"; 
$mail->Body = $mensagem;

if($mail->Send()){
echo "<script>alert ('E-Mail enviado com sucesso')</script>"; 
echo "<script> location.href=('consulta-provas.php') </script>";
}else{
echo "<script>alert ('ERRO ao enviar e-mail, temte novamente')</script>"; 
echo "<script> location.href=('consulta-provas.php') </script>";
echo "Erro ao enviar Email:" . $mail->ErrorInfo;}
	
?>