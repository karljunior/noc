<!DOCTYPE HTML>
<?php 
// Consulta os dados do Incidente.
$IM = $_GET[im];
if ($IM) {
	require_once ('../inc/dbcon.php');

	$script_select='select ambiente,severidade,descincidente,ocorrencia,impacto,date_format(datainicio,"%d/%m/%Y %H:%i") as datainicio,date_format(datafim,"%d/%m/%Y %H:%i") as datafim,status,
(select para from tb_notificacoes where numeroIM="'.$IM.'" order by idnotificacao desc limit 1) para,
(select cc from tb_notificacoes where numeroIM="'.$IM.'" order by idnotificacao desc limit 1) cc,
(select acoes from tb_notificacoes where numeroIM="'.$IM.'" order by idnotificacao desc limit 1) acoes
from tb_incidente 
where numeroIM = "'.$IM.'" ';


//	$script_select="select ambiente,severidade,descincidente,ocorrencia,impacto,date_format(datainicio,'%d/%m/%Y %H:%i') as datainicio,date_format(datafim,'%d/%m/%Y %H:%i') as datafim,status ";
//	$script_select.="from tb_incidente where numeroIM = '$IM';";
	//echo $script_select." <br /><hr />";


	$res_busca = mysql_query($script_select);
	$escrever = mysql_fetch_array($res_busca);
	
	//Ver qual o tipo de notificação poderá ser feita. Se vazio, OPEN, se Open, Follow e Close, senão, oculta botões
	$var_botoes=$escrever[status];

	
	$rrecord=$escrever['datainicio'];
	
	//echo date("Y-m-d\TH:i", strtotime($rrecord->strval('datenote')));
	
	echo $escrever['datainicio'];
	mysql_close();
}



?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

	<title>NOC - Incidentes</title>
	<link href="./index_files/style2.css" rel="stylesheet" type="text/css">
	<link href="inc/css.css" rel="stylesheet" type="text/css" >

</head>

<body>
	<!--
	    <div data-role="fieldcontain">
            <label for="datetime-l">Date:</label>
            <input type="datetime-local" name="datetime-l" id="datetime-l"  value="" />
            <hr />
        </div>
        -->


	<form name="incidenteOPEN" action="email.php" method="post">
	<div>
		<div class="_leftimg"></div>
		<div class="_topo"><h4>COMUNICADO DE ALERTA/INDISPONIBILIDADE - INFRAESTRUTURA DE TI<br>SALA DE MONITORAMENTO</h4></div>
		<div class="_classe">ALERTA</div>

		<div id="_middle">
			<br>
			<table id="incidente" >
				<tbody>
				<tr>
					<th>OCORR&Ecirc;NCIA:</th><td colspan="3">
						<textarea name="ocorrencia" cols="90" rows="2"><?= $escrever['ocorrencia'] ?></textarea>
					</td>
				</tr>
				<tr>
					<th>IMPACTO:</th><td colspan="3">
						<textarea name="impacto" cols="90" rows="2"><?= $escrever['impacto'] ?></textarea>
					</td>
				</tr>
			
			

			
			
				
				<tr>
					<th>Data/Hora in&iacute;cio:</th><td align="center">
						<input type="text" name="datainicio" maxlength="16" value="<?= $escrever['datainicio'] ?>" >
						<!--<input type="datetime-local" name="datainicio" maxlength="16" value="<?= $escrever['datainicio'] ?>" >-->
					</td>
					<th>Data/Hora fim:</th><td align="center">
						<input type="text" name="datafim" value="<?= $escrever['datafim'] ?>" maxlength="16">
						<!--<input type="datetime-local" name="datafim" value="<?= $escrever['datafim'] ?>" maxlength="16">-->
					</td>
				</tr>
				<tr>
					<th>A&ccedil;&otilde;es Esperadas:</th><td colspan="3">
						<textarea name="acaoesperada" cols="90" rows="2"><?= $escrever['acaoesperada'] ?></textarea>
					</td>
				</tr>
				<tr>
					<th>Situ&ccedil;&atilde;o Atual:</th><td colspan="3">
						<textarea name="situacaoatual" cols="90" rows="2"></textarea>
					</td>
				</tr>
				<tr>
					<th>Registro de Incidente:</th><td colspan="3">
						<input type="text" value="<?= $IM ?>" name="numincidente" />
					</td>
				</tr>

				</tbody>
			</table>
			<hr />
			
			<table id="incidente">
			<tbody>
				<tr rowspan="2">
					<th >Hist&oacute;rico:</th><td colspan="3"><textarea name="historico" cols="90" rows="4"><?= $escrever[data1] ?> | <?= $escrever[historico1] ?></textarea></td>
				</tr>
			</tbody>
			</table>
			
			
			
			
			
			
		</div>
		<br>
		
		<div class="_footer">
			<table id="incidente">
			<tbody>
				<tr>
					<th>Ambiente:</th><td><textarea name="ambiente" cols="30" rows="2"><?= $escrever[ambiente] ?></textarea></td>
					<th>Severidade (<?= $escrever[severidade] ?>) :</th><td>
					   <input type=radio name=severity value="4" <?php if ($escrever[severidade]=="4") { echo 'checked'; } ?>  >Aten&ccedil;&atilde;o&nbsp;|&nbsp;
					   <input type=radio name=severity value="3" <?php if ($escrever[severidade]=="3") { echo 'checked'; } ?>  >M&eacute;dia&nbsp;|&nbsp;
					   <input type=radio name=severity value="2" <?php if ($escrever[severidade]=="2") { echo 'checked'; } ?>  >Alta&nbsp;|&nbsp;
					   <input type=radio name=severity value="1" <?php if ($escrever[severidade]=="1") { echo 'checked'; } ?>  >Urgente

					</th>
				</tr>
				<tr>
					<th>Titulo:</th><td colspan="3"><textarea name="assunto" cols="90" rows="2"><?= $escrever[descincidente] ?></textarea></td>
				</tr>
				<tr>
					<th>Enviar PARA:</th><td colspan="3"><textarea name="para" cols="90" rows="2"><?= $escrever[para] ?></textarea></td>
				</tr>
		
				<tr>
					<th>Com C&Oacute;PIA:</th><td colspan="3"><textarea name="copia" cols="90" rows="2"><?= $escrever[cc] ?></textarea></td>
				</tr>
				<tr>
					<th>Evid&ecirc;ncias:</th><td colspan="3">
						<input type="file" name="evidencia" multiple=""></input>
					</td>
					
					
					<?php
						include "inc/Upload.class.php";
						
						if ((isset($_POST["submit"])) && (! empty($_FILES['foto']))){ 
						  $upload = new Upload($_FILES['foto'], 1000, 800, "anexos/");
						  echo $upload->salvar();
						}
					?>
						<!-- Leia mais em: Classe para upload de imagens em PHP com redimensionamento http://www.devmedia.com.br/classe-para-upload-de-imagens-em-php-com-redimensionamento/28573-->
						

					
				</tr>

			</tbody>
			</table>

			
			
			
			<br>
			||&nbsp;<input class="botaoform" type="button" name="Voltar" value="Voltar" onclick="javascript:history.go(-1)">&nbsp;||

			<?php
				switch ($var_botoes) {
				    case 'O':
				        echo '&nbsp;<input class="botaoform" type="submit" name="Follow" value="- Follow -">&nbsp;||&nbsp;<input class="botaoform" type="submit" name="Closed" value="- Closed -">&nbsp;||';
				        break;
				    case 'F':
				        echo '&nbsp;<input class="botaoform" type="submit" name="Follow" value="- Follow -">&nbsp;||&nbsp;<input class="botaoform" type="submit" name="Closed" value="- Closed -">&nbsp;||';
				        break;
				    case 'C':
				        break;
				    default:
				        echo '&nbsp;<input class="botaoform" type="submit" name="Preparar" value="- OPEN -">&nbsp;||';
				}
			?>

		</div>
		
	</div>
	</form>

</body>
</html>