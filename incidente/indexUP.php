<html> 
<form method='post' enctype='multipart/form-data'><br> 
<input type='file' name='foto' value='Cadastrar foto'> 
<input type='submit' name='submit'> </form> 
<?php
	include "inc/Upload.class.php"; 
	
	if ((isset($_POST["submit"])) && (! empty($_FILES['foto']))){ 
	  $upload = new Upload($_FILES['foto'], 1000, 800, "anexos/");
	  echo $upload->salvar();
	}
?>
</body>
</html>

Leia mais em: Classe para upload de imagens em PHP com redimensionamento http://www.devmedia.com.br/classe-para-upload-de-imagens-em-php-com-redimensionamento/28573#ixzz37vTlxxDh