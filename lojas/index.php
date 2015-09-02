<? 
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Dominios lojas</title>
	<link href="inc/css.css" rel="stylesheet" type="text/css" />


	<script>
	function showHint(str)
	{
	var xmlhttp;
	if (str.length==0)
	  { 
	  document.getElementById("txtHint").innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","gethint.asp?q="+str,true);
	xmlhttp.send();
	}
	</script>
	
	
	
</head>

<body>
	<div class="principal">
		<?php include("inc/topo.php"); ?>
		<div class="main">
		|| <input class="botaoform" type="submit" name="NovaLoja" value="Nova Loja" onclick="window.location='loja.php'">
		|| <input class="botaoform" type="submit" name="Refresh" value="Atualizar" onclick="document.location.reload(true)">
		||
		<hr>
		<?php

			echo '<h3>LISTA DAS LOJAS...</h3>';
			echo '
				<form name="formBusca" method="GET" action="index.php">
				<table id="alter" border="1" cellpadding="5px" cellspacing="0">
					<tr>
						<th colspan="4">Buscar Loja:<input type="text" name="loja" cols="30" value="" onkeyup="showHint(this.value)"> <input type="submit" name="Buscar" value="Buscar" class="botaoform"></th>
					</tr>
				

					<tr>
						<th class="im" colspan="2"><b>Loja</b></th>
						<th class="descricao"><b>Descri&ccedil;&atilde;o</b></th>
						<th class="data"><b>Data Expira&ccedil;&atilde;o</b></th>
					</tr>
				';	
					
					
			// Defina o numero de registros exibidos por pagina.
			$num_por_pagina = 50;

			// Descubra o numero da pagina que será exibida.
			$pagina = $_GET['pagina'];
			// Se o numero da pagina nao for informado, definir como 1
			if (!$pagina) {
			$pagina = 1;
			}

			// Definir o numero do primeiro registro da pagina. Faca a continha na calculadora que voce entendera minha formula.
			$primeiro_registro = ($pagina * $num_por_pagina) - $num_por_pagina;


			// Consulta apenas os registros da pagina em questao utilizando como auxilio a definicao LIMIT. Ordene os registros.
			$LOJA = $_GET[loja];
			if ($LOJA) {
			echo '<script>alert(IM OK);</script>';
			$script_select="SELECT idloja,loja,dominio,DATE_FORMAT(dt_dominio_expira,'%d/%m/%Y') as datarexpira FROM lojas WHERE loja like '%$LOJA%' ORDER BY 2;";
			} else {
			$script_select="SELECT idloja,loja,dominio,DATE_FORMAT(dt_dominio_expira,'%d/%m/%Y') as dataexpira FROM lojas ORDER BY 2 LIMIT $primeiro_registro, $num_por_pagina;";
			}
			//echo $script_select;
			$res_busca = mysql_query($script_select);
			
			$qtde_passageiros = mysql_num_rows($res_busca);
			
			$cont = 1;
			/* Carregar incidentes na tabela-->  */
			while ($escrever = mysql_fetch_array($res_busca)) {
			$resto = ($cont % 2);
				if ($resto == 0) {
					$var_tr = " class=\"dif\"";
				} else {
					$var_tr = " ";
				}
				echo '
					<tr' . $var_tr . '>
						<td ><a href="loja.php?idloja='.$escrever[idloja].'">'.$escrever[idloja].'</td>
						<td class="im"><a href="loja.php?idloja='.$escrever[idloja].'">'.$escrever[loja].'</td>
						<td class="descricao">'.$escrever[dominio].'</td>
						<td class="data">'.$escrever[dataexpira].'</td>';
				echo '</tr>';
				$cont++;
			}

			echo ' </table></form>';
			
			if ($qtde_passageiros>($num_por_pagina-1)) {
			
				// bloco 6 - construa e exiba um painel de navegabilidade entre as paginas
				$consulta2 = "SELECT COUNT(*) FROM lojas";
				list($total_usuarios) = mysql_fetch_array(mysql_query($consulta2));
				
				$total_paginas = ($total_usuarios / $num_por_pagina);
				
				$prev = $pagina - 1;
				$next = $pagina + 1;
				// se pagina maior que 1 (um), entao temos link para a pagina anterior
				if ($pagina > 1) {
				$prev_link = "<a href=\"" . $PHP_SELF . "?pagina=" . $prev . "\">Anterior</a>";
				} else { // senao nao ha link para a pagina anterior
				$prev_link = "Anterior";
				}
				
				// se namero total de paginas for maior que a pagina corrente, entao temos link para a proxima pagina
				if ($total_paginas > $pagina) {
				$next_link = "<a href=\"" . $PHP_SELF . "?pagina=" . $next . "\">Pr&oacute;xima";
				} else { // senao nao ha link para a proxima pagina
				$next_link = "Pr&oacute;xima";
				}
				
				// vamos arredondar para o alto o numero de paginas que serao necessarias para exibir todos os registros. Por exemplo, se temos 20 registros e mostramos 6 por pagina, nossa variavel $total_paginas sera igual a 20/6, que resultara em 3.33. Para exibir os 2 registros restantes dos 18 mostrados nas primeiras 3 paginas (0.33), sera necessaria a quarta pagina. Logo, sempre devemos arredondar uma fracao de numero real para um inteiro de cima e isto eh feito com a funcao ceil().
				$total_paginas = ceil($total_paginas);
				$painel = "";
				for ($x = 1; $x <= $total_paginas; $x++) {
				if ($x == $pagina) { // se estivermos na pagina corrente, nao exibir o link para visualizacao desta pagina
				    $painel .= " [" . $x . "] ";
				} else {
				    $painel .= " <a href=\"" . $PHP_SELF . "?pagina=" . $x . "\">[" . $x . "]</a>";
				}
				}
				
				
				// exibir painel na tela
				echo " " . $prev_link . " | " . $painel . " | " . $next_link;
			}
			//FECHAR CONEXA COM BANCO
			mysql_close();
		?>
		</div>
		<div><br />&nbsp;<br /></div>
	</div>
</body>
</html>