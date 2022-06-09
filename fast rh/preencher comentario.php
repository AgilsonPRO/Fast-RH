<style type="text/css">
<!--
body {
	background-color: #90C1E2;
}
-->
</style>
<div align="center">
  <p><img src="Logo FAST RH.png"></p>
  <p><strong>COMENT&Aacute;RIOS</strong></p>
</div>

<?php

@$ROW  =$_GET["row"];
@$NOME =$_GET["nome"];
@$COMENTARIO =$_GET["Comentario"];

$row = base64_decode ($ROW);
$nome= base64_decode ($NOME);
$Comentario =base64_decode ($COMENTARIO);

?>

<form action="Adicionar comentario.php?row=<?php echo $row  ?>&nome=<?php echo $nome   ?>" method="post">
         <div align="center">
           <textarea name="COMENTARIO" cols="100"  rows="15"  id="COMENTARIO" placeholder="<?php echo  $Comentario ?>"></textarea>
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

