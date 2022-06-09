<style type="text/css">
<!--
body {
	background-image: url();
	background-color: #96C2E5;
	background-repeat: no-repeat;
}
#Layer1 {
	position:absolute;
	width:1134px;
	height:154px;
	z-index:1;
	left: 2px;
	top: -3px;
	background-color: #D2B8A5;
}
h1 {
	font-size: xx-small;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
<?php
@$qst_2 = $_GET['qst_2']; 
@$qst_3 = $_GET['qst_3']; 
@$qst_4 = $_GET['qst_4']; 
@$qst_5 = $_GET['qst_5']; 
@$qst_6 = $_GET['qst_6']; 
@$qst_7 = $_GET['qst_7']; 
@$qst_8 = $_GET['qst_8'];  
@$qst_9 = $_GET['qst_9']; 
@$qst_10 = $_GET['qst_10']; 
@$qst_11 = $_GET['qst_11']; 
@$qst_12 = $_GET['qst_12']; 
@$qst_13 = $_GET['qst_13']; 
@$qst_14 = $_GET['qst_14']; 
@$qst_15 = $_GET['qst_15'];  

@$totalport=$qst_1+$qst_2+$qst_3+$qst_4+$qst_5; 
@$totalmat=$qst_6+$qst_7+$qst_8+$qst_9+$qst_10; 
@$totalrac=$qst_11+$qst_12+$qst_13+$qst_14+$qst_15; 

//if(( $totalport==0) or ($totalmat==0) or ($totalrac==0)) {
//echo "<script>alert ('Prova em branco,tente novamente.')</script>";
//echo "<script> location.href=('Questionario.php') </script>";
//}

?>

 <script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
 </script>
<p align="center"><img src="Logo FAST RH.png" width="303" height="117" align="middle" /></p>
 <p align="center" class="style1">Cadastro de Usu&aacute;rio </p>
 <form id="form1" name="usuario" method="post" action="valida-usuario.php?totalport=<?php echo "$totalport" ?>&totalmat=<?php echo "$totalmat" ?>&totalrac=<?php echo "$totalrac"?>&status=NOVO&Comentario=Seja o Primeiro a Avaliar">
 <div align="center">
   <table width="720" border="0">
     <tr>
       <td width="136" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Nome Completo: </strong></td>
       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
         
         <label for="label2"></label>
        <input type="text" name="nome" maxlength="60" size="60" id="nome" />         </td>
     </tr>
     <tr>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>CPF:</strong></td>
       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
         
         <label for="label3"></label>
        <input type="text" name="cpf" maxlength="11"  size="11" id="cpf" onKeyPress="mascara(this, '#####-###')" />        </td>
     </tr>
     <tr>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Data de nascimento: </strong></td>
       <td width="115" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
         
         <label for="label4"></label>
        <input type="text" name="datanascimento" maxlength="8" size="8" id="datanascimento" />        </td>
       <td width="96" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Sexo:</strong></td>
       <td width="143" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
         
         <label for="select"></label>
         <select name="sexo" id="sexo">
           <option value="Masculino">Masculino</option>
	    <option value="Feminino">Feminino</option
         ></select>        </td>
       <td width="63" bordercolor="#CCCCCC" bgcolor="#CCCCCC"> <strong>Estado Civil: </strong></td>
       <td width="127" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
         
         <label for="label5"></label>
         <select name="Ecivil" id="Ecivil">
           <option value="Solteiro(a)">Solteiro(a)</option>
           <option value="Casado(a)">Casado(a)</option>
           <option value="Divorciado(a)">Divorciado(a)</option>
        </select>        </td>
     </tr>
     <tr>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Telefone:</strong></td>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC">
         
         <label for="label6"></label>
        <input type="text" name="telefone" maxlength="12" size="12" id="telefone" placeholder="(xx) xxxx-xxxx"/>        </td>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Recados:</strong></td>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC">
         
         <label for="label7"></label>
        <input type="text" name="recado"  maxlength="12"  size="12" id="recado" placeholder="(xx) xxxx-xxxx"  />        </td>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>UF</strong></td>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><label>
	   <select name="UF" id="UF">
         <option value="Acre">Acre</option>
           <option value="Alagoas">Alagoas</option>
           <option value="Amapá">Amap&aacute;</option>
           <option value="Amazonas">Amazonas</option>
           <option value="Bahia">Bahia</option>
           <option value="Ceará">Cear&aacute;</option>
           <option value="Distrito Federal">Distrito Federal</option>
           <option value="Espírito Santo">Esp&iacute;rito Santo</option>
           <option value="Goiás">Goi&aacute;s</option>
           <option value="Maranhão">Maranh&atilde;o</option>
           <option value="Mato Grosso">Mato Grosso</option>
           <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
           <option value="Minas Gerais">Minas Gerais</option>
           <option value="Pará">Par&aacute;</option>
           <option value="Paraíba">Para&iacute;ba</option>
           <option value="Paraná">Paran&aacute;</option>
           <option value="Pernanbuco">Pernambuco</option>
           <option value="Piauí">Piau&iacute;</option>
           <option value="Rio de Janeiro">Rio de Janeiro</option>
           <option value="Rio Grande do Norte">Rio Grande do Norte</option>
           <option value="Rio Grande do Sul">Rio Grande do Sul</option>
           <option value="Rondônia">Rond&ocirc;nia</option>
           <option value="Roraima">Roraima</option>
           <option value="Santa Catarina">Santa Catarina</option>
           <option value="São Paulo">S&atilde;o Paulo</option>
           <option value="Sergipe">Sergipe</option>
           <option value="Tocantins">Tocantins</option>
         </select>
       </label></td>
     </tr>
     <tr>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>E-mail:</strong></td>
       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
         
         <label for="label8"></label>
        <input type="text" name="email" size="60" maxlength="60" id="email" />        </td>
     </tr>
     <tr>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Escolaridade:</strong></td>
       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC"><select name="Escolaridade" id="Escolaridade">
         <option value="Médio Completo">M&eacute;dio Completo</option>
         <option value="Médio Incompleto">M&eacute;dio Incompleto</option>
         <option value="Médio Cursando">M&eacute;dio Cursando</option>
         <option value="Superior Completo">Superior Completo</option>
         <option value="Superior Incompleto">Superior Incompleto</option>
         <option value="Superior Cursando">Superior Cursando</option>
         <option value="Fundamental Completo">Fundamental Completo</option>
         <option value="Fundamental Incompleto">Fundamental Incompleto</option>
         <option value="Fundamental Cursando">Fundamental Cursando</option>
         <option value="Pós-Graduação Completo">P&oacute;s-Gradua&ccedil;&atilde;o Completo</option>
         <option value="Pós-Graduação Incompleto">P&oacute;s-Gradua&ccedil;&atilde;o Incompleto</option>
         <option value="Pós-Graduação Cursando">P&oacute;s-Gradua&ccedil;&atilde;o Cursando</option>
              </select></td>
     </tr>
     <tr>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Endere&ccedil;o:</strong></td>
       <td colspan="5" bordercolor="#CCCCCC" bgcolor="#CCCCCC">
         <label for="label12"></label>
        <input type="text" name="endereco" size="60" maxlength="60" id="endereco" />       </td>
     </tr>
     <tr>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Dispoibilidade de Hor&aacute;rio: </strong></td>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC">
         
         <label for="label9"></label>
         <select name="Dishorario" id="Dishorario">
           <option value="Manh&atilde">Manhã</option>
           <option value="Noite">Noite</option>
           <option value="Intermediario">Intermediario</option>
        </select>        </td>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>&Aacute;rea pretendida: </strong></td>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC">
         
         <label for="label10"></label>
         <select name="Areapre" id="Areapre">
           <option value="Segurança">Segurança</option>
           <option value="Vendas">Vendas</option>
           <option value="Escritorio">Escritório</option>
           <option value="Estoque">Estoque</option>
           <option value="Operador de caixa">Operador de caixa</option>
           <option value="Crediario">Crediario</option>
           <option value="Provadores">Provadores</option>
        </select>        </td>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><strong>Filhos:</strong></td>
       <td bordercolor="#CCCCCC" bgcolor="#CCCCCC"><select name="filhos" id="filhos">
	     <option value="Nenhum">Nenhum</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
		 <option value="4">4</option>
		 <option value="5">5</option>
		 <option value="6">6</option>
		 <option value="Mais que 6">Mais que 6</option>
		 
       </select></td>
     </tr>
    </table>
 </div>
   <label for="label11"></label>
   <div align="center">
    <div align="center">
      <table width="326" border="0">
        <tr>
          <td width="156" height="15">
            <div align="center">
            <input type="image" name="imageField22" src="Botão salvar.png" width="150"  height="30"/>
            </div>
 </form></td>
 <form id="form1" name="form1" method="post" action="Pagina inicial.php">
          <td width="156" height="26"> 
            <label for="Submit"></label>
            <div align="center">
            <input type="image" name="imageField22" src="Botão inicio.png" width="150"  height="30"/>
            </div>
          </form>        </td>
        </tr>
      </table>
    </div>
    <p align="center">&nbsp;</p>
 <p align="center">&nbsp;</p>
