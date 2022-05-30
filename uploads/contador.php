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
            CONTADOR DE ANO
            <hr>
            <form method="GET" action="<?php echo $_SERVER['PHP_SELF']?>">
                <input type="text" name="termo" maxlength="4" placeholder="Termo Aqui"><br><br>
                <input type="submit" value="Clique aqui para enviar">

            <?php
            require '../outros/conexao.php';


            //$anoatual = '2022';
            $anoatual = date('Y');
            $query_ano = "SELECT MAX(ano) FROM glpi_formulario_entrega";
            $result_ano = mysqli_query($conn, $query_ano);
            $row_ano = mysqli_fetch_row($result_ano);
                foreach($result_ano as $row_ano){
                   $string_ano = implode(" ", $row_ano);
                   echo "<br>" . 'O maior ano dentro da tabela é: ' . $string_ano;
            }
            
            if ($anoatual > $string_ano) {
                //Temos que  zerar o termo na tabela
                //Para isso temos que saber o valor do termo_id de ordem DESC

                $queryIdTermo = "SELECT termo_id FROM glpi_formulario_entrega ORDER BY termo_id DESC LIMIT 1";
                $resultIdTermo = mysqli_query($conn, $queryIdTermo);
                $row_Termo = mysqli_fetch_row($resultIdTermo);
                    foreach($resultIdTermo as $row_Termo){
                    $stringID = implode(" ", $row_Termo);
                }

                $queryUpdateTermo = "UPDATE glpi_formulario_entrega SET termo = '1', ano = '$anoatual'
                WHERE glpi_formulario_entrega.termo_id = '$stringID';";
                $resultIdTermo = mysqli_query($conn, $queryUpdateTermo);

            } else {
                $queryTERMO = "SELECT termo FROM glpi_formulario_entrega ORDER BY termo_id DESC LIMIT 1";
                $resultTERMO = mysqli_query($conn, $queryTERMO);
                $row_Termo = mysqli_fetch_row($resultTERMO);
                    foreach($resultTERMO as $row_Termo2){
                    $stringID2 = implode(" ", $row_Termo2);
                    //$stringID2 = 1;
                    
                }
                
                $var_2 = $stringID2 + 1;
                $query3 = "INSERT INTO `glpi_formulario_entrega` 
                (`termo_id`, `termo`, `ano`, `unidade`, `setor`, `responsavel_entrega`, `equipamento`, `marca`, `modelo`, `serie`, `patrimonio`, `nome_despachante`, `obs`) 
                VALUES (null, '$var_2', '$anoatual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";
                $var = mysqli_query($conn, $query3);
               
            };

            mysqli_close($conn);
            ?> 



        </div>
    </main>
    <footer class="rodape">
        CURSO & ALUNOS © <?= date("j. n. Y"); ?>
    </footer>
</body>
</html>