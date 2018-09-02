<!DOCTYPE html>
<html>
<head>
	<meta name="viweport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
	<title> Exercício 02/ Tela 01 </title>
</head>
<body>

	<header>
	Fun Quiz
	<hr>
	Qual é a capital da Russia?
	</header>

	<form  method="GET" action="exer2.php">
	<div>	
		<label for="nome"> Nome:   </label>
		<input type="text" name="nome" id="nome">
	</div>
	
	<input type="radio" name="ver" value="ver"> Berlim
	<br>
	<input type="radio" name="certa" value="certa"> Samara
	<br>
	<input type="radio" name="pre" value="pre"> Moscou
	<br>
	<button type="submit" value="Enviar"> Enviar </button>
	<div>		
		</form>

</body>
</html>