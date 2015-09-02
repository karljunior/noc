<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Revisar</title>
	<meta http-equiv=Content-Type content="text/html; charset=iso-8859-2">

	<link rel="stylesheet" type="text/css" href="inc/estilos.css">
	
</head>
<body>
<?php
echo '
	<div align="center">
		<form name="email" action="#">


		<p style=\'margin-left:120.0pt;text-indent:-120.0pt;tab-stops:120.0pt;mso-layout-grid-align:none;text-autospace:none\'><b>
		<span style=\'color:black\'>Assunto:<span style=\'mso-tab-count:1\'></span></span></b>
		<span style=\'color:black\'><o:p>## '.$_POST[tipo].' <<'.$_POST[ambiente].'>> ALERTA <<'.$_POST[severidade].'>> << '.$_POST[descincidente].' >></o:p></span></p>



		<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=959 style=\'width:719.4pt;mso-cellspacing:0cm;margin-left:-11.9pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm\'>
			<tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;height:64.3pt\'>
				<td width=110 valign=top style=\'width:82.6pt;padding:0cm 0cm 0cm 0cm; height:64.3pt\'>
					<p><!--[if gte vml 1]><v:shapetype id="_x0000_t75" coordsize="21600,21600"
						   o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe" filled="f"
						   stroked="f">
						   <v:stroke joinstyle="miter"/>
						   <v:formulas>
							<v:f eqn="if lineDrawn pixelLineWidth 0"/>
							<v:f eqn="sum @0 1 0"/>
							<v:f eqn="sum 0 0 @1"/>
							<v:f eqn="prod @2 1 2"/>
							<v:f eqn="prod @3 21600 pixelWidth"/>
							<v:f eqn="prod @3 21600 pixelHeight"/>
							<v:f eqn="sum @0 0 1"/>
							<v:f eqn="prod @6 1 2"/>
							<v:f eqn="prod @7 21600 pixelWidth"/>
							<v:f eqn="sum @8 21600 0"/>
							<v:f eqn="prod @7 21600 pixelHeight"/>
							<v:f eqn="sum @10 21600 0"/>
						   </v:formulas>
						   <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
						   <o:lock v:ext="edit" aspectratio="t"/>
						  </v:shapetype><v:shape id="Imagem_x0020_6" o:spid="_x0000_s1029" type="#_x0000_t75"
						   alt="Descriçăo: cid:image001.png@01CD85FA.CEA35020"
						   style=\'position:absolute;margin-left:13.5pt;margin-top:12.05pt;width:106.5pt;
						   height:24pt;z-index:251659264;visibility:visible;mso-wrap-style:square;
						   mso-width-percent:0;mso-height-percent:0;mso-wrap-distance-left:9pt;
						   mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
						   mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
						   mso-position-horizontal-relative:text;mso-position-vertical:absolute;
						   mso-position-vertical-relative:text;mso-width-percent:0;
						   mso-height-percent:0;mso-width-relative:page;mso-height-relative:page\'>
						   <v:imagedata src="img/image001.png" o:title="image001.png@01CD85FA"/>
						  </v:shape><![endif]--><![if !vml]><span style=\'mso-ignore:vglayout;
						  position:absolute;z-index:251659264;margin-left:18px;margin-top:16px;
						  width:142px;height:32px\'><img width=142 height=32
						  src="img/logo_peq.png"
						  alt="Descriçăo: Descriçăo: cid:image001.png@01CD85FA.CEA35020"
						  v:shapes="Imagem_x0020_6"></span><![endif]><a name="_MailOriginal"></a><span
						  style=\'mso-bookmark:_MailOriginal\'><b><span style=\'font-size:13.5pt;
						  font-family:"Arial","sans-serif";color:#1F497D\'><o:p></o:p></span></b></span>
					</p>
				</td>
		  
				<td width=849 style=\'width:636.8pt;padding:0cm 0cm 0cm 0cm;height:64.3pt\'>
					<p align=center style=\'text-align:center\'><span style=\'mso-bookmark:_MailOriginal\'><b>
						<span style=\'font-size:13.5pt;font-family:"Arial","sans-serif";color:#1F497D\'>COMUNICADO DE ALERTA/INDISPONIBILIDADE - INFRAESTRUTURA DE TI<o:p></o:p></span></b></span>
					</p>
					<p align=center style=\'text-align:center\'><span style=\'mso-bookmark:_MailOriginal\'><b>
						<span style=\'font-size:13.5pt;font-family:"Arial","sans-serif";color:#1F497D\'>SALA DE MONITORAMENTO<br style=\'mso-special-character:line-break\'>
						<![if !supportLineBreakNewLine]><br style=\'mso-special-character:line-break\'>
						<![endif]><o:p></o:p></span></b></span></p>
				</td>
		  
		 </tr>
		 <tr style=\'mso-yfti-irow:1;mso-yfti-lastrow:yes;height:235.15pt\'>
		  <td width=959 colspan=2 style=\'width:719.4pt;background:white;padding:0cm 0cm 0cm 0cm;
		  height:235.15pt\'>
		  <div align=center>
			  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=958
			   style=\'width:718.6pt;mso-cellspacing:0cm;margin-left:.1pt;background:#FF9100;
			   border:solid #999999 1.0pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm;
			   mso-border-insideh:1.0pt solid #999999;mso-border-insidev:1.0pt solid #999999\'>
			   <tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
				height:18.05pt\'>
				<td width="100%" valign=top style=\'width:100.0%;border:solid #999999 1.0pt;
				padding:4.55pt 4.55pt 4.55pt 4.55pt;height:18.05pt\'>
				<p align=center style=\'text-align:center\'><span
				style=\'mso-bookmark:_MailOriginal\'><span style=\'font-size:13.5pt;
				font-family:"Trebuchet MS","sans-serif";color:white\'>ALERTA</span></span><span
				style=\'mso-bookmark:_MailOriginal\'><span style=\'font-size:10.0pt;
				font-family:"Verdana","sans-serif";color:red\'><o:p></o:p></span></span></p>
				</td>
				
			   </tr>
			  </table>
		  </div>
		  
		  <div align=center style=\'text-align:center\'><span
		  style=\'mso-bookmark:_MailOriginal\'><b><span style=\'font-family:"Arial","sans-serif";
		  mso-fareast-font-family:"Times New Roman";color:#CC3300\'>
		  <hr size=3 width="100%" align=center>
		  </span></b></span></div>
		  
		  <p class=MsoNormal><span style=\'mso-bookmark:_MailOriginal\'><span
		  style=\'font-size:10.0pt;font-family:"Arial","sans-serif";color:blue\'>&nbsp;</span></span><span
		  style=\'mso-bookmark:_MailOriginal\'><span style=\'font-size:10.0pt;font-family:
		  "Verdana","sans-serif";color:#336699\'>&nbsp;&nbsp;</span></span><span
		  style=\'mso-bookmark:_MailOriginal\'><span style=\'font-family:"Times New Roman","serif"\'><o:p></o:p></span></span></p>
			<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=957 style=\'width:717.95pt;margin-left:.1pt;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm\'>
				<tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes;height:29.65pt\'>
					<td width=168 style=\'width:125.65pt;border:solid #999999 1.0pt;background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:29.65pt\'>
						<p align=center style=\'margin-top:2.0pt;text-align:center\'>
						<b><span style=\'font-size:9.0pt;font-family:"Verdana","sans-serif";color:#1F497D\'>OCORR&Ecirc;NCIA:</span></b>
						</p>
					</td>
					<td width=790 style=\'width:592.3pt;border:solid #999999 1.0pt;border-left:none;background:white;padding:0cm 0cm 0cm 0cm;height:29.65pt\'>
						<p style=\'margin-top:2.0pt;line-height:150%\'>
							<span style=\'font-size:9.0pt;line-height:150%;font-family:"Verdana","sans-serif";color:black;mso-themecolor:text1;background:white\'>
							'.$_POST[ocorrencia].'</span>
						
						</p>
					</td>
		   </tr>
		   
		   

		   <tr style=\'mso-yfti-irow:1;height:29.65pt\'>
			<td width=168 style=\'width:125.65pt;border:solid #999999 1.0pt;border-top:
			none;background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:29.65pt\'>
			<p align=center style=\'margin-top:2.0pt;text-align:center\'><span
			style=\'mso-bookmark:_MailOriginal\'><b><span style=\'font-size:9.0pt;
			font-family:"Verdana","sans-serif";color:#1F497D\'>IMPACTO<o:p></o:p></span></b></span></p>
			</td>
			
			<td width=790 style=\'width:592.3pt;border-top:none;border-left:none;border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;padding:0cm 0cm 0cm 0cm;height:29.65pt\'>
				<p style=\'margin-top:2.0pt;line-height:150%\'>
					<span style=\'mso-bookmark:_MailOriginal\'>
						<span style=\'font-size:9.0pt;line-height:150%;font-family:"Verdana","sans-serif";color:black;mso-themecolor:text1;background:white\'></span>
					</span>
					<span style=\'mso-bookmark:_MailOriginal\'>
						<span style=\'font-size:9.0pt;line-height:150%;font-family:"Verdana","sans-serif";color:black;mso-themecolor:text1\'>
							<o:p>'.$_POST[impacto].'</o:p>
						</span>
					</span>
				</p>
			</td>
			
		   </tr>
		   <tr style=\'mso-yfti-irow:2;height:29.65pt\'>
			<td width=168 style=\'width:125.65pt;border:solid #999999 1.0pt;border-top:
			none;background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:29.65pt\'>
			<p align=center style=\'margin-top:2.0pt;text-align:center\'><span
			style=\'mso-bookmark:_MailOriginal\'><b><span style=\'font-size:9.0pt;
			font-family:"Verdana","sans-serif";color:#1F497D\'>Data/Hora in&iacute;cio<o:p></o:p></span></b></span></p>
			</td>
			
			<td width=790 style=\'width:592.3pt;border-top:none;border-left:none;
			border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
			padding:0cm 0cm 0cm 0cm;height:29.65pt\'>
			<p style=\'margin-top:2.0pt;line-height:150%\'><span
			style=\'mso-bookmark:_MailOriginal\'><span lang=EN-US style=\'font-size:9.0pt;
			line-height:150%;font-family:"Verdana","sans-serif";mso-bidi-font-family:
			"Times New Roman";mso-bidi-theme-font:minor-bidi;color:black;mso-themecolor:
			text1;mso-ansi-language:EN-US\'>'.$_POST[datainicio].'</span></span></p>
			</td>
			
		   </tr>
		   <tr style=\'mso-yfti-irow:3;height:29.65pt\'>
			<td width=168 style=\'width:125.65pt;border:solid #999999 1.0pt;border-top:
			none;background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:29.65pt\'>
			<p align=center style=\'margin-top:2.0pt;text-align:center\'><span
			style=\'mso-bookmark:_MailOriginal\'><b><span style=\'font-size:9.0pt;
			font-family:"Verdana","sans-serif";color:#1F497D\'>Data/Hora fim<o:p></o:p></span></b></span></p>
			</td>
			
			<td width=790 style=\'width:592.3pt;border-top:none;border-left:none;
			border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
			padding:0cm 0cm 0cm 0cm;height:29.65pt\'>
			<p style=\'margin-top:2.0pt;line-height:150%\'><span
			style=\'mso-bookmark:_MailOriginal\'><span lang=EN-US style=\'font-size:9.0pt;
			line-height:150%;font-family:"Verdana","sans-serif";mso-bidi-font-family:
			"Times New Roman";mso-bidi-theme-font:minor-bidi;color:black;mso-themecolor:
			text1;mso-ansi-language:EN-US\'>'.$_POST[datafim].'</span></span></p>
			</td>
			
		   </tr>
		   <tr style=\'mso-yfti-irow:4;height:29.65pt\'>
			<td width=168 style=\'width:125.65pt;border:solid #999999 1.0pt;border-top:
			none;background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:29.65pt\'>
			<p align=center style=\'margin-top:2.0pt;text-align:center\'><span
			style=\'mso-bookmark:_MailOriginal\'><b><span style=\'font-size:9.0pt;
			font-family:"Verdana","sans-serif";color:#1F497D\'>A&ccedil;&atilde;o Esperada<o:p></o:p></span></b></span></p>
			</td>
			
			<td width=790 style=\'width:592.3pt;border-top:none;border-left:none;
			border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
			padding:0cm 0cm 0cm 0cm;height:29.65pt\'>
			<p style=\'margin-top:2.0pt;line-height:150%\'><span
			style=\'mso-bookmark:_MailOriginal\'><span style=\'font-size:9.0pt;line-height:
			150%;font-family:"Verdana","sans-serif";color:black;mso-themecolor:text1;
			mso-bidi-font-weight:bold\'>'.$_POST[acaoesperada].'</span></span><span
			style=\'mso-bookmark:_MailOriginal\'><span style=\'font-size:9.0pt;line-height:
			150%;font-family:"Verdana","sans-serif";color:black;mso-themecolor:text1\'><o:p></o:p></span></span></p>
			</td>
			
		   </tr>
		   <tr style=\'mso-yfti-irow:5;height:29.65pt\'>
			<td width=168 style=\'width:125.65pt;border:solid #999999 1.0pt;border-top:
			none;background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:29.65pt\'>
			<p align=center style=\'margin-top:2.0pt;text-align:center\'><span
			style=\'mso-bookmark:_MailOriginal\'><b><span style=\'font-size:9.0pt;
			font-family:"Verdana","sans-serif";color:#1F497D\'>Situa&ccedil;&atilde;o Atual<o:p></o:p></span></b></span></p>
			</td>
			
			<td width=790 style=\'width:592.3pt;border-top:none;border-left:none;
			border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
			padding:0cm 0cm 0cm 0cm;height:29.65pt\'>
			<p style=\'margin-top:2.0pt;line-height:150%\'><span
			style=\'mso-bookmark:_MailOriginal\'><span style=\'font-size:9.0pt;line-height:
			150%;font-family:"Verdana","sans-serif";color:black;mso-themecolor:text1\'>'.$_POST[situacaoatual].'</span></span></p>
			</td>
			
		   </tr>

		   </tr>
		   <tr style=\'mso-yfti-irow:5;height:29.65pt\'>
			<td width=168 style=\'width:125.65pt;border:solid #999999 1.0pt;border-top:
			none;background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:29.65pt\'>
			<p align=center style=\'margin-top:2.0pt;text-align:center\'><span
			style=\'mso-bookmark:_MailOriginal\'><b><span style=\'font-size:9.0pt;
			font-family:"Verdana","sans-serif";color:#1F497D\'>Hist&oacute;rico:<o:p></o:p></span></b></span></p>
			</td>
			
			<td width=790 style=\'width:592.3pt;border-top:none;border-left:none;
			border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
			padding:0cm 0cm 0cm 0cm;height:29.65pt\'>
			<p style=\'margin-top:2.0pt;line-height:150%\'><span
			style=\'mso-bookmark:_MailOriginal\'><span style=\'font-size:9.0pt;line-height:
			150%;font-family:"Verdana","sans-serif";color:black;mso-themecolor:text1\'>'.$_POST[situacaoatual].'</span></span></p>
			</td>
			
		   </tr>

		   <tr style=\'mso-yfti-irow:6;height:29.65pt\'>
			<td width=168 style=\'width:125.65pt;border:solid #999999 1.0pt;border-top:
			none;background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:29.65pt\'>
			<p align=center style=\'margin-top:2.0pt;text-align:center\'><span
			style=\'mso-bookmark:_MailOriginal\'><b><span style=\'font-size:9.0pt;
			font-family:"Verdana","sans-serif";color:#1F497D\'>Registro de Incidente<o:p></o:p></span></b></span></p>
			</td>
			
			<td width=790 style=\'width:592.3pt;border-top:none;border-left:none;
			border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
			padding:0cm 0cm 0cm 0cm;height:29.65pt\'>
			<p style=\'margin-top:2.0pt;line-height:150%\'><span
			style=\'mso-bookmark:_MailOriginal\'><span style=\'font-size:9.0pt;line-height:
			150%;font-family:"Verdana","sans-serif";color:black;mso-themecolor:text1\'>'.$_POST[numincidente].'</span></span></p>
			</td>
			
		   </tr>
		   <tr style=\'mso-yfti-irow:7;mso-yfti-lastrow:yes;height:29.65pt\'>
			<td width=168 style=\'width:125.65pt;border:solid #999999 1.0pt;border-top:
			none;background:#E6E6E6;padding:0cm 5.4pt 0cm 5.4pt;height:29.65pt\'>
			<p align=center style=\'margin-top:2.0pt;text-align:center\'><span
			style=\'mso-bookmark:_MailOriginal\'><b><span style=\'font-size:9.0pt;
			font-family:"Verdana","sans-serif";color:#1F497D\'>Evid&ecirc;ncias<o:p></o:p></span></b></span></p>
			</td>
			
			<td width=790 style=\'width:592.3pt;border-top:none;border-left:none;
			border-bottom:solid #999999 1.0pt;border-right:solid #999999 1.0pt;
			padding:0cm 0cm 0cm 0cm;height:29.65pt\'>
			<p style=\'margin-top:2.0pt;line-height:150%\'><span
			style=\'mso-bookmark:_MailOriginal\'><span style=\'font-size:9.0pt;line-height:
			150%;font-family:"Verdana","sans-serif";mso-bidi-font-family:"Times New Roman";
			mso-bidi-theme-font:minor-bidi;color:black;mso-themecolor:text1\'>'.$_POST[evidencias].'</span></span></p>
			</td>
			
		   </tr>
		  </table>
		  <p class=MsoNormal><span style=\'mso-bookmark:_MailOriginal\'><span
		  style=\'font-size:10.0pt;font-family:"Verdana","sans-serif";color:black;
		  mso-themecolor:text1\'><o:p>&nbsp;</o:p></span></span></p>
		  
		  <hr />
		  
		  
		  </td>
		  
		 </tr>
		</table>
		<br>
		<center>
		<input class="botaoform" type="button" name="voltar" value="Voltar" onClick="javascript:history.go(-1)" /> ||
		<input type="submit" name="botenviar" value="Enviar" class="botaoform" /> </center>
	</div>
</form>
</body>

</html>
';
?>