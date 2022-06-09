<?php


    require_once('/class.phpmailer.php');
    require_once('/class.smtp.php');




$mail = new phpmailer();
$mail->setlanguage('pt');

$from     ="agilson.profissional@gmail.com";
$fromname ="agilson.profissional@gmail.com";
$host     ="smtp.gmail.com";
$username ="agilson.profissional@gmail.com";
$password ='21442924';
$port     ="587";
$secure   ="tls";

$mail->isSMTP();
$mail->SMTPDebug = 1;
$mail->Host        =$host;
$mail->SMTPAuth    =true;
$mail->Username    =$username;
$mail->Passworld   =$password;
$mail->Port        =$port;
$mail->SMTPSecure  =$secure;


$mail->From = $from;
$mail->FromName =$fromname;
$mail->addReplyTo($from,$fromname);


$mail->addAddress('agilson.profissional@hotmail.com', 'Agilson');
$mail->isHTML(true);
$mail->CharSet = 'utf-8';
$mail->WordWrap =70;
$mail->Subject ='Enviando e-mails em php';
$mail->Body    ='Enviando e-mails com php <b>Mailer</b>';
$mail->AltBody ='Enviando e-mails com php';


$send =$mail->Send();
if($send)
  echo 'e-mail enviado com sucesso !';
  else
  echo 'Erro : '.$mail->ErrorInfo;
  
?>

