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

        textarea::-webkit-input-placeholder{
            font-size: 17px;
        }
    </style>
<script type="text/javascript">
    document.getElementById('titulo').addEventListener("keyup", function() {
        var nameInput = document.getElementById('titulo').value;
            if (nameInput != "") {
                document.getElementById('dis').removeAttribute("disabled");
            } else {
                document.getElementById('dis').setAttribute("disabled", null);
            }
        });

</script>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <!-- <h1>PHP</h1> -->
        <!-- <h2>Vizualização (CODES)</h2>
    </header>
        <nav class="navegacao">
            <a href="#" class="verde">Ainda sem função</a>
            <a href="../php/index.php" class="vermelho">Voltar</a>
        </nav> -->

    <main class="principal">
        <div class="conteudo">
            Uploads de Fotos
            <hr>

            <form class="was-validated" method="POST" enctype="multipart/form-data" action="./uploads/recebe_upload.php">
                <div class="mb-3">
                    <input type="file" class="form-control" aria-label="file example" id="image" name="image" 
                         required>
                    <div class="invalid-feedback">Nenhuma imagem selecionada.</div>
                </div>

                <!-- <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Digite o t&iacute;tulo</label>
                    <input class="form-control is-invalid" maxlength="30" name="titulo" id="titulo" placeholder="Apenas os caracteres especiais 'espaço'   .    -    _  e aspas sao permitidos" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Digite aqui seu coment&aacute;rio</label>
                    <textarea class="form-control is-invalid" maxlength="150" name="comment" id="comment" placeholder="Apenas os caracteres especiais 'espaço'   .    -    _  e aspas sao permitidos" required></textarea>
                </div> -->

                <div class="mb-3">
                    <input type="submit" value="Enviar" class="btn btn-primary" id="submitEnviar">
                    <!--<button class="btn btn-primary" type="submit" name="dis" id="dis" onclick="window.location.href = '/coder/uploads/recebe_upload.php'">Enviar</button>-->
                </div>
            </form>
 
            <?php

            ?> 

        </div>
    </main>
    <footer class="rodape">
        CURSO & ALUNOS © <?= date("j. n. Y"); ?>
    </footer>
</body>
</html>