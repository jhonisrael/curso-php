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
            FOTOS, PDF, DOC.
            <hr>
            <form method="POST" enctype="multipart/form-data" action="#">
                <input type="file" name="arquivo" accept="image/*,.pdf,.doc,.docx,.dotx,.dot,.ppt,.txt"><br><br>
                <input type="submit" value="Clique aqui para enviar">

            <?php

            $url = "";
            //Padrao de validacao
            $padraoNomeImage = "/^[a-zA-Z0-9.\-\_\:\+\ ]{1,99}\.(pdf|doc|docx|dotx|dot|ppt|txt)$/i";
            $verificaTamanho = $_FILES['arquivo']['size'];
            $verificaNome = $_FILES[ 'arquivo' ][ 'name' ];

            if(preg_match($padraoNomeImage, $verificaNome)){
                $var = "1";
                echo "V&aacute;lido";
            }else{
                echo "Inv&aacute;lido! Voltando...";
                header("refresh: ;$url");
            }

            //verifica o tamanho de image 5MB
            if($verificaTamanho > 5242880){
                echo "Arquivo muito grande!";
                header("refresh: ;$url");
            }



            
            ?> 



        </div>
    </main>
    <footer class="rodape">
        CURSO & ALUNOS © <?= date("j. n. Y"); ?>
    </footer>
</body>
</html>