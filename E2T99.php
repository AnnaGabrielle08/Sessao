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
     <?php 
     session_start();
     echo $_SESSION['usuario']; 
      ?>
     Sua pontuação foi:
     </header>
     <?php 
      echo $_SESSION['certo'];
     ?>
 <br>
 <a href="sair.php">sair</a>
</body>
</html>