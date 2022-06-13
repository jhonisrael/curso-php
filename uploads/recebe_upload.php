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

    <main class="principal">
        <div class="conteudo">
            Recebe Fotos
            <hr>
 
            <?php
            //$comentario = $_POST['comment'];
            //$titulo = $_POST['titulo'];
            $verificaNomeImage = $_FILES[ 'image' ][ 'name' ];

            //Uso de expressao regular.
            $url = "uploads_pics.php";
            $padraoNome = "/^[a-zA-Z0-9.\-\_\/\'\"\ ]{1,30}$/i";                            //   
            $padraoComment = "/^[a-zA-Z0-9.\-\_\/\'\"\ ]{1,150}$/i";                        //
            //$padraoNomeImage = "/^[a-zA-Z0-9.\-\_\:\ ]{1,50}\.(png|PNG|gif|JPG|jpeg|jpg)$/i";     //
            $padraoNomeImage = "/^[a-zA-Z0-9.\-\_\:\ ]{1,50}\.(PDF|pdf)$/i";     //

            //if($verificaNomeImage == "" && $comentario == "" && $titulo == ""){
            /*if($verificaNomeImage){
                echo "Desculpe, conteudo vazio";
                header("refresh: 3;$url");
            }else{*/

                //if de validacao de comentario
                /*if(preg_match($padraoComment, $comentario)){
                    $validacaoComment = "1";
                }else{
                    echo "Comentario não é válido";
                    header("refresh: 3;$url");
                    die();
                }*/

                //if de validacao de titulo
                /*if(preg_match($padraoNome, $titulo)){
                    $validacaoTitle = "1";
                }else{
                    echo "Título não é válido";
                    header("refresh: 3;$url");
                    die();
                }*/

                //if de validacao de imagem
                if(preg_match($padraoNomeImage, $verificaNomeImage)){
                    $validacaoImagem = "1";
                }else{
                    echo "Imagem não é válida. Tente renomear sua imagem ou verifique a extensão do arquivo de imagem";
                    header("refresh: 3;$url");
                    die();
                }

                // verifica se foi enviado um arquivo
                if ( isset( $_FILES[ 'image' ][ 'name' ] ) && $_FILES[ 'image' ][ 'error' ] == 0 ) {
                    echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'image' ][ 'name' ] . '</strong><br />';
                    echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'image' ][ 'type' ] . ' </strong ><br />';
                    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'image' ][ 'tmp_name' ] . '</strong><br />';
                    echo 'Seu tamanho é: <strong>' . $_FILES[ 'image' ][ 'size' ] . '</strong> Bytes<br>';
                    echo 'erro: <strong>' . $_FILES[ 'image' ][ 'error' ] . '</strong><br><br>';
                
                    $arquivo_tmp = $_FILES[ 'image' ][ 'tmp_name' ];
                    $nome = $_FILES[ 'image' ][ 'name' ];
                
                    // Pega a extensão
                    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
                
                    // Converte a extensão para minúsculo
                    $extensao = strtolower ( $extensao );

                    if ( strstr ( '.PDF;.pdf', $extensao ) ) {
                        // Cria um nome único para esta imagem
                        // Evita que duplique as imagens no servidor.
                        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                        $novoNome = uniqid ( time() ) . '.' . $extensao;
                
                        // Concatena a pasta com o nome
                        $destino = 'imagens/' . $novoNome;
                
                        // tenta mover o arquivo para o destino
                        if (move_uploaded_file ( $arquivo_tmp, $destino ) ) {
                            //echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
                            //echo '<img src="' . $destino . '" />';
                            echo $destino;
                        }
                        else
                            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
                    }
                    else
                        echo 'Envie apenas arquivos "*.jpg; *.jpeg; *.gif; *.png"<br/>';
                }
                else
                    echo 'Você não enviou nenhum arquivo!';

            //} //fim if do primeiro if (verificação de imagens)
            ?> 

            <!--<div class="card"  style="width: 35%">
                <div class="card-body">
                    <h5 class="card-title"><?=$titulo?></h5>
                    <p class="card-text"><?=$comentario?></p>
                </div>
                <img src="imagens/<?=$novoNome?>" alt="...">
            </div>-->



        </div>
    </main>
</body>
</html>