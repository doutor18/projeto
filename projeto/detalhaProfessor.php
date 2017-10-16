<?php
	include ("cabecalho.php");
	include ("professores.php");

	$siape=$_GET['cod'];

	$professor=buscaProfessor($siape);

?>

<img src="<?=professor['foto']?>">
<p><?=$professor['nome']?></p>
<p><?=$professor['email']?></p>

	<?php
	include ("rodape.php");
?>
