<div class="tittulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if (!$_session['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if (!$_session['email']) {
    $_SESSION['email'] = 'Gabriel@gmaail.com';
}

print_r($_SESSION);

?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">
       Alterar Sessão
    </a>
</p>