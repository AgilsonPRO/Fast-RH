<style type="text/css">
<!--
body {
	background-color: #90C1E2;
}
-->
</style>
 <html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("elements", "1", {
          packages: "keyboard"
      });
      function onLoad() {
        var kbd = new google.elements.keyboard.Keyboard(
          [google.elements.keyboard.LayoutCode.BRAZILIAN_PORTUGUESE],
          ['tv1']);
      }
      google.setOnLoadCallback(onLoad);
    </script>
	</head>
	</html>
<?
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:Pagina inicial.php');
	}

$logado   = $_SESSION['login'];

?>

<?php

$EMAIL       =$_GET['email'];
$nome        =$_GET['nome'];

$email    = base64_decode($EMAIL); 
  

?>


<div align="center">
  <p><img src="Logo FAST RH.png"></p>
  <p>&nbsp;</p>
</div>

<p align="center"><strong>DADOS DO E-MAIL</strong></p>

<form action="Gera-email.php?email=<?php echo $email  ?>&nome=<?php echo $nome   ?>" method="post">
  <div class="form-group">
    <div align="center">
      <table width="830" border="0" bgcolor="#999999">
            <tr>
              <td><strong>DE : FAST RH </strong></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#999999"><strong>PARA : <?php echo $nome ?></strong></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="177"><input type="email"  name="com_copia" id="tv1" placeholder="copia para:" /></td>
              <td width="112">&nbsp;</td>
            </tr>
          </table>
        </div>
  </div>
    <div class="form-group">
         <div align="center"></div>
    </div>
    <div class="form-group">
         <div align="center"></div>
    </div>
    <div class="form-group">
         <div align="center">
           <textarea name="mensagem" cols="100"  rows="15"  id="tv1" placeholder="mensagem:"></textarea>
      </div>
	  
	  
    </table>
 </div>
   <label for="label11"></label>
   <div align="center">
    <div align="center">
      <table width="326" border="0">
        <tr>
          <td width="156" height="15">
            <div align="center">
            <input type="image" name="imageField22" src="Botão enviar.png" width="150"  height="30"/>
            </div>
 </form></td>
 <form id="form1" name="form1" method="post" action="consulta-provas.php">
          <td width="156" height="26"> 
            <label for="Submit"></label>
            <div align="center">
           <input type="image" name="imageField22" src="Botão voltar.png" width="150"  height="30"/>
            </div>
          </form>        </td>
        </tr>
      </table>
   </div>
</form>
