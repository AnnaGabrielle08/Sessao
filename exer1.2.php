<!DOCTYPE html>
<html>
<head>
	<meta name="viweport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title> Exercício 01/ Tela 01 </title>
</head>
<body>
<?php 
	session_start();
	if (($_SESSION['id1'])>($_SESSION['id2'])) {
		echo "O mais velho é ".$_SESSION['n1']."<br>";
	}
		else {
 			echo "O mais velho é ".$_SESSION['n2']."<br>";
		}

	if (($_SESSION['p1'])>($_SESSION['p2'])) {
 		echo "O de maior peso é ".$_SESSION['n1']."<br>";
	}

	else {
 		echo "O de maior peso é ".$_SESSION['n2']."<br>";
	}

	if (($_SESSION['alt1'])>($_SESSION['alt2']))  {
 		echo "O de maior altura é ".$_SESSION['n1']."<br>";
	}
	else {
		echo "O de maior altura é ".$_SESSION['n2'];
	}

 ?>
 </body>
</html>
