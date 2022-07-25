<div class="titulo"> Teste include</div>

<?php

require_once('classe_usuarios.php');


$usuario = new Usuario(' Gustavo Mendonça ', 21, 'gust_mend');
echo $usuario->apresentar();
unset ($usuario);