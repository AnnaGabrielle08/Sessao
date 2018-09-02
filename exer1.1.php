<?php 
	session_start();

  if (isset($_GET['nome2']) && isset($_GET['idade2']) && isset($_GET['peso2']) && isset($_GET['altura2']))
 {
		$_SESSION['n2'] = $_GET['nome2'];
		$_SESSION['id2'] = $_GET['idade2'];
		$_SESSION['p2'] = $_GET['peso2'];
		$_SESSION['alt2'] = $_GET['altura2'];
		header ("location: exer1.2.php"); 
}
 ?>