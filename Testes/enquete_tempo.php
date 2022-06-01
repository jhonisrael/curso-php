<!DOCTYPE html>
<html lang="en">
<head>
  <title>Examplo CRUD - cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body class="container p-5 my-5 bg-secondary text-white" >

<?php
include './Testes/relogio.php';
?>

<form action="/curso-php/exercicio.php?dir=Testes&file=enquete_tempo" method="POST">
  <div class="form-group"> <h1>pergunta 1</h1>
  <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      <label class="form-check-label" for="check1">Option 1</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
      <label class="form-check-label" for="check2">Option 2</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">
      <label class="form-check-label" for="check3">Option 3</label>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </div>
</form>

<?php
if ($_POST['option2'] == true) {
    echo "Resposta correta!";
} 
else {
    echo "Resposta errada!";
}

?>