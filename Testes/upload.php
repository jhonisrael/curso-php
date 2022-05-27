<div class="titulo">Upload PDF</div>

<form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">

<input type="file" name="imagem" accept=".pdf">
<input type="submit">

</form>

<?php

$nomeArquivo = $_FILES['imagem'] ['name'];
//$tipoArquivo = $_FILES['imagem'] ['type'];
$temp = $_FILES['imagem'] ['tmp_name'];
$tamanhoArquivo =$_FILES['imagem'] ['size'];
//$erro = $_FILES['imagem'] ['error'];

//echo $nomeArquivo . '-->' . $tamanhoArquivo;

$extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
$extensao = strtolower($extensao);

if ($extensao != 'pdf') {
    die('Arquivo inválido');
} else {
    $newName = uniqid(time()) . '.' . $extensao;
    $caminho = "uploads/" . $newName;

    if (move_uploaded_file($temp, $caminho)) {
        echo "sucesso!";
    }


}

?>