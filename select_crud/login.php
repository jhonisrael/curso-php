<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
     table, tr, td {
        border: 1px solid royalblue;
        
    } 
</style>


</head>
<body>
<div class="container mt-3">
  <form action="#" method="POST">
    <div class="mb-3 mt-3">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Enter nome" name="nome">
    </div>
    <div class="mb-3">
      <label for="email">email</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="comment">Comentario:</label>
      <textarea class="form-control" rows="5" id="comment" name="texto"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>

<?php
require './banco/conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$texto = $_POST['texto'];


$sql = "INSERT INTO teste VALUES ('', '$nome', '$email', '$texto')";

if (mysqli_query($mysqli_connection, $sql)) {
    // echo "enviado com sucesso!";
} else {
  echo "Error: " . mysqli_error($mysqli_connection);
}


$queryResultado = "select nome, email, texto FROM teste";
$resultado = mysqli_query($mysqli_connection, $queryResultado);
?>

<table class="table table-striped table-dark">
<thead class="thead-dark">
<tr>
    <th scope="col">
        nome
    </th>
    <th scope="col">
        email
    </th>
    <th scope="col">
        texto
    </th>
</tr>
</thead>



<?php 

foreach ($resultado as $resultadoTela) {

    echo '<tr>';
    echo '<td>';
    print_r($resultadoTela['nome']);
    echo '</td>';

    echo '<td>';
    print_r($resultadoTela['email']);
    echo '</td>';
    
    echo '<td>';
    print_r($resultadoTela['texto']);
    echo '</td>';
    echo '</tr>';

}
?>
</table>

<?php
mysqli_close($mysqli_connection);

//echo "Seja bem vindo $";

?>