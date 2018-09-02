
 <?php 
	session_start();

  if (isset($_GET['nome1']) && isset($_GET['idade1']) && isset($_GET['peso1']) && isset($_GET['altura1']))
 {
		$_SESSION['n1'] = $_GET['nome1'];
		$_SESSION['id1'] = $_GET['idade1'];
		$_SESSION['p1'] = $_GET['peso1'];
		$_SESSION['alt1'] = $_GET['altura1'];
		header ("location: E1T2.php");
	}
 else {
   echo "Preencha todos os campos do formulário!";
}
?>