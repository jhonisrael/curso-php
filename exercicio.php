<?php
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}


if (!$_SESSION['usuario']) {
    header('Location: login.php');
}
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https: //fonts.googleapis.com/css2? family = Oswald: wght @ 200; 300; 400; 500; 600; 700 & display = swap "rel =" stylesheet ">
<link rel="stylesheet" href="recursos/CSS/style.css">
<link rel="stylesheet" href="recursos/CSS/exercicio.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>exercicio</title>
</head>
<body class="exercicio">
    <header class="cabeçalho">
    <h1>PHP</h1>
    <H2>visualizaçao do exercicio</H2>
    </header>
    <nav class= navegacao>
    <span class="usuario"> E aí <?= $_SESSION['usuario']?> !</span>
    <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">sem formatação</a>    
    <a href="index.php" >voltar</a>   
    <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
    <div class="conteudo">
        <?php 
       // include ($_GET['dir'] . "/" . ($_GET ['file'] . "/teste.php");   
       include ("{$_GET['dir']}/{$_GET['file']}.php");
        ?>
    </div>
    </main>
    <footer class="rodape">
     Copyright © <?= date("F j, Y"); ?>
    </footer>
</body>
</html>