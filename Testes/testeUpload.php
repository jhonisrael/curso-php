<?php
// echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'image' ][ 'tmp_name' ] . '</strong><br />';
require './banco/conexao.php';

$nomeArquivo = $_FILES['imagem'] ['name'];
//$tipoArquivo = $_FILES['imagem'] ['type'];
$temp = $_FILES[ 'imagem' ][ 'tmp_name' ];
$tamanhoArquivo = $_FILES['imagem'] ['size'];
//$erro = $_FILES['imagem'] ['error'];

//echo $nomeArquivo . '-->' . $tamanhoArquivo;

//Uso de expressão regular
$padraoNome = "/^[a-zA-Z0-9.\-\_\/\'\"\ ]{1,30}$/i";                            //   
$padraoComment = "/^[a-zA-Z0-9.\-\_\/\'\"\ ]{1,150}$/i";                        //
//$padraoNomeImage = "/^[a-zA-Z0-9.\-\_\:\ ]{1,50}\.(png|PNG|gif|JPG|jpeg|jpg)$/i";     //
$padraoNomeImage = "/^[a-zA-Z0-9.\-\_\:\ ]{1,50}\.(PDF|pdf)$/i"; 
//--------------------------------------------------------------

$extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
$extensao = strtolower($extensao);

if ($extensao != 'pdf') {
    die('Arquivo inválido');
} else {
    $newName = md5(uniqid(time())) . '.' . $extensao;
    $caminho = "./uploadss" . $newName;


    if (move_uploaded_file($temp, $caminho)) {
        // echo "sucesso!";
        
       $sql = "INSERT INTO teste (nome) VALUE ('$newName')";
       if (mysqli_query($mysqli_connection, $sql)) {
        echo "enviado com sucesso!";
    } else {
      echo "Error: " . mysqli_error($mysqli_connection);
    }
    mysqli_close($mysqli_connection);


    }
    // else {
    //     echo "Error";
    // }

}

?>