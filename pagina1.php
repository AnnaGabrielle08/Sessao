<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php session_start(); ?>
	<h2> Seja bem vindo  <?php echo $_SESSION['usuario'] ?> </h2>

	<a href="sair.php">Sair</a>

</body>
</html>