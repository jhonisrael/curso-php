<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../php/recursos/css/exercicio.css">
    <link rel="stylesheet" href="../php/recursos/css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Exercicios</title>
    <style>
        a:hover{
            color: white;
        }
    </style>

</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>PHP</h1>
        <h2>Vizualização (CODES)</h2>
    </header>
        <nav class="navegacao">
            <a href="../uploads/uploads_pics.php" class="verde">Voltar Página</a>
            <a href="../php/index.php" class="vermelho">Voltar</a>
        </nav>

    <main class="principal">
        <div class="conteudo">
            SELECT CONTADOR DE ANO
            <hr>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                <input type="text" name="ano" maxlength="4" placeholder="ano Aqui"><br><br>
                <input type="submit" value="Clique aqui para enviar">

            <?php
            require '../outros/conexao.php';

            $ano = $_POST['ano'];

            $query = "SELECT termo FROM termos WHERE ano = $ano";
          
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_row($result);
            foreach($result as $row){
               $string = implode(" ", $row);
               echo ' ' . $string;
            }
            



        
            mysqli_close($conn);           
            
            ?> 



        </div>
    </main>
    <footer class="rodape">
        CURSO & ALUNOS © <?= date("j. n. Y"); ?>
    </footer>
</body>
</html>