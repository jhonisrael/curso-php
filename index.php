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
    <title>PHP</title>
</head>
<body>
    <header class="cabeçalho">
    <h1>PHP</h1>
    <H2>Exemplos</H2>
    </header>
    <nav class= navegacao>
        <span class="usuario">E aí <?= $_SESSION['usuario']?>!</span>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
    <div class="conteudo">
        <?php  require_once('menu.php') ?>
    </div>
    </main> 
    <footer class="rodape">
    Copyright © <?= date("F j, Y"); ?>
    </footer>
</body>
</html>