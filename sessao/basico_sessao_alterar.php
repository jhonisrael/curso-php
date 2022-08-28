<?php
session_start();
print_r($_SESSION);
?>

<?php
$_SESSION['email'] = 'gabrielalterado@hotmail.com';
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?> <br>
    <b>Email: </b> <?= $_SESSION['email'] ?> <br>
</p>

<p>
    <a href="basico_sessao.php">Voltar</a>
</p>

<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>