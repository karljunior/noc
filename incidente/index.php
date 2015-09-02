<? require_once('../inc/validasession.php'); ?>
<?php //include("../inc/menu.html"); ?>
<?php include('../inc/dbcon.php') ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Incidentes</title>
	<link href="inc/css.css" rel="stylesheet" type="text/css" />
	<link href="./index_files/style2.css" rel="stylesheet" type="text/css">

</head>

<body>
        <div class="principal">
		|| <input class="botaoform" type="submit" name="NovoEmail" value="Novo Email" onclick="window.location='incidente.php'">
		|| <input class="botaoform" type="submit" name="Refresh" value="Atualizar" onclick="document.location.reload(true)">
		||
		<hr>
		<?php

			echo '<h3>LISTA DOS INCIDENTES...</h3>';
			echo '
				<form name="formBusca" method="GET" action="index.php">
				<table id="alter" border="1" cellpadding="5px" cellspacing="0">
					<tr>
						<th colspan="4">Buscar IM:<input type="text" name="im" cols="30" value=""> <input type="submit" name="Buscar" value="Buscar" class="botaoform"></th>
					</tr>
				

					<tr>
						<th class="im"><b>IM</b></td>
						<th class="descricao"><b>Descri&ccedil;&atilde;o</b></td>
						<th class="data"><b>Data</b></td>
						<th class="im"><b>Status</b></td>
			
					</tr>
				</form>';	
					
					
			// Defina o numero de registros exibidos por pagina.
			$num_por_pagina = 10;

			// Descubra o numero da pagina que será exibida.
			$pagina = $_GET['pagina'];
			// Se o numero da pagina nao for informado, definir como 1
			if (!$pagina) {
			$pagina = 1;
			}

			// Definir o numero do primeiro registro da pagina. Faca a continha na calculadora que voce entendera minha formula.
			$primeiro_registro = ($pagina * $num_por_pagina) - $num_por_pagina;


			// Consulta apenas os registros da pagina em questao utilizando como auxilio a definicao LIMIT. Ordene os registros.
			$IM = $_GET[im];
			if ($IM) {
			echo '<script>alert(IM OK);</script>';
			$script_select="SELECT numeroIM,descincidente,DATE_FORMAT(datainicio,'%d/%m/%Y %h:%i') as datainicio,status FROM tb_incidente WHERE numeroIM like '%$IM%';";
			} else {
			$script_select="SELECT numeroIM,descincidente,DATE_FORMAT(datainicio,'%d/%m/%Y %h:%i') as datainicio,status FROM tb_incidente LIMIT $primeiro_registro, $num_por_pagina;";
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
						<td ><a href="incidente.php?im='.$escrever[numeroIM].'">'.$escrever[numeroIM].'</td>
						<td class="descricao">'.$escrever[descincidente].'</td>
						<td >'.$escrever[datainicio].'</td>';

						switch ($escrever[status]) {
						    case 'O':
						        echo '<td >Open</td>';
						        break;
						    case 'F':
						        echo '<td >Follow</td>';
						        break;
						    case 'C':
						        echo '<td >Closed</td>';
						        break;
						}

/*
						if ($escrever[status]=='C') {
							echo '<td colspan="3"> <a href="#">-</a></td>';
						}else {
							echo '<td ><input class="botaoform" type="submit" name="Follow" value="Follow" onclick="window.location=\'incidente.php?im='.$escrever[numeroIM].'&tipo=f\'">';
							echo '<td ><input class="botaoform" type="submit" name="Closed" value="Closed" onclick="window.location=\'incidente.php?im='.$escrever[numeroIM].'&tipo=c\'">';
						}*/
				echo '</tr>';
				$cont++;
			}

			echo ' </table>';
			
			if ($qtde_passageiros>($num_por_pagina-1)) {
			
				// bloco 6 - construa e exiba um painel de navegabilidade entre as paginas
				$consulta2 = "SELECT COUNT(*) FROM tb_incidente";
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
		<div><br />&nbsp;<br /></div>
	</div>
</body>
</html>