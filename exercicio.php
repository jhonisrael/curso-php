<?php
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
    <title>exercicio</title>
</head>
<body class="exercicio">
    <header class="cabeçalho">
    <h1>PHP</h1>
    <H2>visualizaçao do exercicio</H2>
    </header>
    <nav class= navegacao>
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">sem formatação</a>    
        <a href="index.php" class="vermelho">voltar</a>   
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
      COD3R © <?= date("F j, Y"); ?>
    </footer>
</body>
</html>