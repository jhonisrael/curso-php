<div class="titulo"> Teste include</div>

<?php

require_once('classe_usuarios.php');


$usuario = new Usuario(' Jhonata Farias ', 21, 'jhonata_farias');
echo $usuario->apresentar();
unset ($usuario);