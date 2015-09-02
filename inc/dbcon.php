<?
$CONF_LOCAL_BD				= "localhost";
$CONF_USR_BD 				= "karl.otte";
$CONF_SENHA_BD				= "Aho1907";
$dbname			    		= "noc";

//conecta ao banco de dados
mysql_connect($CONF_LOCAL_BD,$CONF_USR_BD,$CONF_SENHA_BD) or die(">> Conexão com servidor indisponível << >> ".mysql_error());
//seleciona o banco de dados
mysql_select_db($dbname)or die(">> Não foi possível conectar-se com o banco de dados << >> ".mysql_error());
//FIM
?>