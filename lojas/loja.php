<?php
	include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
	protegePagina(); // Chama a função que protege a página


	$IDLOJA = $_GET["idloja"];
	
	
	$ano = substr($_GET["data"], -4);
	$mes = substr($_GET["data"], -7, 2);
	$dia = substr($_GET["data"], -10, 2);
	
	$_data = $ano.$mes.$dia;
	
	if ($_GET["Salvar"]=="Salvar") {
			echo "<br />SALVANDO NO BANCO<br /><br />LOJA: ".$_GET["loja"]."<br /> DOMINIO:: ".$_GET["dominio"]."<br />Data que expira: $_data <br />  <br />";
	} else
	
	//Consulta dados da loja
	if ($IDLOJA) {
		$script_select="SELECT idloja,loja,dominio,DATE_FORMAT(dt_dominio_expira,'%d/%m/%Y') as dataexpiracao FROM lojas WHERE idloja = '$IDLOJA';";
		//echo "<br />".$script_select."<br />";
		//exit;
		$res_busca = mysql_query($script_select) or die(mysql_error());
		$qtde_passageiros = mysql_num_rows($res_busca);
		
		
		if ($qtde_passageiros==0) {
			echo 'NENHUM REGISTRO ENCONTRADO';
		} else if ($qtde_passageiros>1) {
			echo 'MAIS DE 1 REGISTRO SELECIONADO. REVISAR FILTRO';
		}

		$linha = mysql_fetch_array($res_busca) or die(mysql_error());

		
	}

	//FECHAR CONEXA COM BANCO
	mysql_close();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Dom&iacute;nios lojas</title>
	<link href="inc/css.css" rel="stylesheet" type="text/css" />
	<link href="./index_files/style2.css" rel="stylesheet" type="text/css">

</head>

<body>
	<?php include("inc/topo.php"); ?>
	<div class="principal">
		|| <input class="botaoform" type="submit" name="NovaLoja" value="Nova Loja" onclick="window.location='loja.php'">
		|| <input class="botaoform" type="submit" name="Refresh" value="Atualizar" onclick="document.location.reload(true)">
		|| <input class="botaoform" type="submit" name="Voltar" value="Voltar" onclick="javascript:window.history.back();">
		||
		<hr>
		
		
		<h3>LOJA...</h3>
		
		<form name="formBusca" method="GET" action="loja.php">
		
		<table id="alter" border="1" cellpadding="5px" cellspacing="0">
			<tr>
				<th class="im"><b>Loja:</b></th><td><input type="text" name="loja" cols="30" value="<?= $linha[loja];?>" ></td>
			</tr>
			<tr>
				<th class="im"><b>Dom&iacute;nio:</b></th><td><input type="text" name="dominio" cols="30" value="<?= $linha[dominio];?>" ></td>
			</tr>
			<tr>
				<th class="im">Data expira&ccedil;&atilde;o:</th><td><input type="text" name="data" cols="30" value="<?= $linha[dataexpiracao];?>" ></td>
			</tr>
			
			<tr>
				<td colspan="2"><input class="botaoform" type="button" name="Cancelar" value="Cancelar" onclick="javascript:window.history.back();">
		|| <input class="botaoform" type="submit" name="Salvar" value="Salvar" > </td>
			</tr>
			
			
		</table>
		</form>
			
	</div>
</body>
</html>