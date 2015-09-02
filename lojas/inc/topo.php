<?php 

if($_GET["logout"]){
session_destroy();
header("location: index.php");
exit;
}

?>

<div class="topo">
		<?php echo "Ola, " . $_SESSION['usuarioNome']; ?>. <input class="botaoform" type="submit" name="SAIR" value="SAIR" onclick="window.location='index.php?logout=1'">
</div>