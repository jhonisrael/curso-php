<?php
// error_reporting(0);
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']) {
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "senha" => "123456",
        ],
        [
            "nome" => "Outro Aluno",
            "email" => "outro@email.com.br",
            "senha" => "654321",
        ],
    ];

    foreach ($usuarios as $usuario) {
        $emailvalido = $email === $usuario['email'];
        $senhavailda = $senha === $usuario['senha'];

        if($emailvalido && $senhavailda) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            header('Location: index.php');
        }
    }

    if (!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário/senha inválido'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https: //fonts.googleapis.com/css2? family = Oswald: wght @ 200; 300; 400; 500; 600; 700 & display = swap "rel =" stylesheet ">
<link rel="stylesheet" href="recursos/CSS/style.css">
<link rel="stylesheet" href="recursos/CSS/login.css">
    <title>PHP</title>
</head>
<body class="login">
    <header class="cabeçalho">
    <h1>PHP</h1>
    <H2>Seja Bem Vindo</H2>
    </header>
    <main class="principal">
    <div class="conteudo">
        <h3>Identifique-se</h3>
        <?php if ($_SESSION['erros']): ?>
        <div class="erros">
            <?php foreach ($_SESSION['erros'] as $erro): ?>
            <p><?= $erro ?></p>
            <?php endforeach ?>
        </div>
        <?php endif ?>
      <form action="#" method="POST">
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <button>Entrar</button>
      </form>
    </div>
    </main> 
    <footer class="rodape">
     COD3R © <?= date("F j, Y"); ?>
    </footer>
</body>
</html>