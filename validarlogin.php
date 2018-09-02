<!DOCTYPE html>
<?php
 session_start();

 	if(isset($_POST['usuario']) && isset($_POST['senha'])) {
 		$usuario = $_POST['usuario'];
 		$senha = $_POST['senha'];

 	if ($senha == "1234" && $usuario == "admin") {
  		$_SESSION['usuario'] = $usuario;
  		header("location:pagina1.php");}
 	
 		if ($senha == "12345" && $usuario == "visit") {
  		$_SESSION['usuario'] = $usuario;
  		header("location:pagina1.php");}

  		 		if ($senha == "123456" && $usuario == "colab") {
  		$_SESSION['usuario'] = $usuario;
  		header("location:pagina1.php");}

 	else {
 		echo "<h2> Usuario ou senha invalidos </h2>";
 	}
 	}
 	else {
 		echo "Não há dados armazenados";
 	}
 	?>

