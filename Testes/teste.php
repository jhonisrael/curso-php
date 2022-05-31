
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>Crud</h1>
    <form action="" method="POST">
     <div>
     <label for="example">Nome</label>
    <input type="text" name="nome" class="form-control" id="nome">
     </div>
     <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
require "./banco/conexao.php";
$nome = $_POST['nome'];

$sql = "select * from teste where nome = '$nome'";

$resultado = mysqli_query($mysqli_connection, $sql);

if ($nome == null) {
    echo "Usuario vazio!";
  } else {

$sql = "INSERT INTO teste (nome) VALUE ('$nome')";
if (mysqli_query($mysqli_connection, $sql)) {
    echo "enviado com sucesso!";
} else {
  echo "Error: " . mysqli_error($mysqli_connection);
}
mysqli_close($mysqli_connection);
  }
?>
