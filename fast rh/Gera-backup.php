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
// dados de conex�o com o banco de dados
$usuario = "localhost";
$senha = "";
$dbname = "fastdb";
// conectando ao banco

include "conecta-banco.php";

// gerando um arquivo sql. Como?
// a fun��o fopen, abre um arquivo, que no meu caso, ser� chamado como: nomedobanco.sql
// note que eu estou concatenando dinamicamente o nome do banco com a extens�o .sql.
	$back = fopen($dbname.".sql","w");

// aqui, listo todas as tabelas daquele banco selecionado acima	
	
$sql = "SHOW TABLES FROM $dbname";
$res = mysql_query($sql);

//Em seguida, vamos, verificar quais s�o as tabelas daquela base, lista-las, e em um la�o for, vamos mostrar cada uma delas, e resgatar as fun��es descria��o da tabela, para serem gravadas no arquivo sql mais adiante.

// resgato cada uma das tabelas, num loop
	while ($row = mysql_fetch_row($res)){
	$table = $row[0]; 
// usando a fun��o SHOW CREATE TABLE do mysql, exibo as fun��es de cria��o da tabela, 
// exportando tamb�m isso, para nosso arquivo de backup
	$res2 = mysql_query("SHOW CREATE TABLE $table");
// digo que o comando acima deve ser feito em cada uma das tabelas

while ( $lin = mysql_fetch_row($res2)){ 
// instru��es que ser�o gravadas no arquivo de backup
		fwrite($back,"\n#\n# Cria��o da Tabela : $table\n#\n\n");
		fwrite($back,"$lin[1] ;\n\n#\n# Dados a serem inclu�dos na tabela\n#\n\n");

//Teremos ent�o de pegar os dados que est�o dentro de cada campo de cada tabela, e abri-los tamb�m para serem gravados no nosso arquivo de backup.

// seleciono todos os dados de cada tabela pega no while acima
// e depois gravo no arquivo .sql, usando comandos de insert
	$res3 = mysql_query("SELECT * FROM $table");
		while($r=mysql_fetch_row($res3)){ 
	$sql="INSERT INTO $table VALUES (";

//Agora vamos pegar cada dado do campo de cada tabela, e executar tarefas como, quebra de linha, substitui��o de aspas, espa�os em branco, etc. Deixando o arquivo confi�vel para ser importado em outro banco de dados.

// este la�o ir� executar os comandos acima, gerando o arquivo ao final, 
// na fun��o fwrite (gravar um arquivo)
// este la�o tamb�m ir� substituir as aspas duplas, simples e campos vazios
// por aspas simples, colocando espa�os e quebras de linha ao final de cada registro, etc
// deixando o arquivo pronto para ser importado em outro banco
   
 for($j=0; $j<mysql_num_fields($res3);$j++)
		        {
		            if(!isset($r[$j]))
		                $sql .= " '',";
		            elseif($r[$j] != "")
                        $sql .= " '".addslashes($r[$j])."',";
		            else
		                $sql .= " '',";
		        }
                        $sql = preg_replace(",$,", "", $sql);
		                $sql .= ");\n";

		fwrite($back,$sql);
		}
	}
}

//E finalmente, vamos fechar (internamente, no servidor) o arquivo que geramos, dando um nome para o mesmo, e gerando o arquivo que ser� ent�o disponibilizado para download.

// fechar o arquivo que foi gravado
fclose($back);
// gerando o arquivo para download, com o nome do banco e extens�o sql.
	$arquivo = $dbname.".sql";

   ob_start();

  require('zip.lib.php');

  //Gera o objeto
   $zipfile = new zipfile($dbname.".zip",'', '');

  //Adiciona o diretorio corrente com todos arquivos
  //$zipfile->addDirContent('./');

  //Adicionado o aquivo criado
  $zipfile->addFileAndRead($arquivo);

  //Saida do aquivo compactado
  echo $zipfile->file();

?>

