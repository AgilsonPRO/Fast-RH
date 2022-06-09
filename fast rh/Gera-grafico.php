<?php  
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:Pagina inicial.php');
	}

$logado= $_SESSION['senha'];
?>
<?php
include 'phplot.php';

$totalmat =$_GET['totalmat'];
$totalport=$_GET['totalport'];
$totalrac=$_GET['totalrac'];

//

$mediatotalport=$_GET['mediatotalport'];
$mediatotalmat=$_GET['mediatotalmat'];
$mediatotalrac=$_GET['mediatotalrac'];

$data = array(
             array('PORTUGU�S' ,$totalport,$mediatotalport),
             array('MATEMATICA' ,$totalmat,$mediatotalmat), 
             array('RACIOC�NIO L�GICO' ,$totalrac,$mediatotalrac),
             );    
# Cria um novo objeto do tipo PHPlot com 500px de largura x 350px de altura                
$plot = new PHPlot(800 , 550);     
// Organiza Gr�fico -----------------------------
$plot->SetTitle('NOTAS USU�RIO');
# Precis�o de uma casa decimal
$plot->SetPrecisionY(1);
# tipo de Gr�fico em barras (poderia ser linepoints por exemplo)
$plot->SetPlotType("bars");
# Tipo de dados que preencher�o o Gr�fico text(label dos anos) e data (valores de porcentagem)
$plot->SetDataType("text-data");
# Adiciona ao gr�fico os valores do array
$plot->SetDataValues($data);
# Seta os tra�os (grid) do eixo X para invis�vel
$plot->SetXTickPos('none');
$plot->SetLegend(array('M�dia Candidato','M�dia Usu�rios'));
# Texto abaixo do eixo X
$plot->SetXLabel("");
# Tamanho da fonte que varia de 1-5
$plot->SetXLabelFontSize(2);
$plot->SetAxisFontSize(2);
$plot->SetYDataLabelPos('plotin');
$plot->DrawGraph();
?>
