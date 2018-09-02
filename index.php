<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>07/08 Criando Acesso por sessão </title>
</head>
<body>

	<?php
		session_start();
		if(isset($_SESSION['usuario'])){
	?>
	
		<h2>Usuario Logado: <?php echo $_SESSION['usuario'] ?></h2>
		<a href="sair.php">Sair</a>

		<?php

		} else{ 

		?>

	<form method= "post" action= "validarlogin.php">
			<label for="usuario"> Usuário </label>
			<input type="text" name="usuario" id="usuario"/>
			<br>
			<label for="senha"> Senha </label>
			<input type="password" name="senha" id="senha"/>
			<br>
			<input type="submit" value="Logar"/>

	</form>
	<?php
		} //fechando else
	?>

</body>
</html>