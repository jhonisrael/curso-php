<div class="titulo">Interpolação </div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero";

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br> eu tenho 5 $objetos"; //forma incorreta de acrescentar letra
echo "<br> eu tenho 5 {$objeto}s.";//forma correta de acrescentar letras-strings
echo "<br> eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s"; //não deixar espaços no inicio das chaves, só ao final ou não deixar espaços.

