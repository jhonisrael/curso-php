<div class="titulo">Closure & Callable</div>

<?php

$soma1 = function($a, $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
};

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? 'sim' : 'não') . '<br>';

echo soma2(2, 3) . ' ';
echo (is_callable($soma1) ? 'sim' : 'não') . '<br>';


function executar1($a, $b, $op, Callable $funcao) {
	$resultado = $funcao($a, $b);
	echo "$a $op $b = $resultado <br>";
}
echo '<br>';
executar1(2, 3, '+', $soma1);
//executar1(2, 3, '+', soma2);
function executar2($a, $b, $op, Closure $funcao) {
	$resultado = $funcao($a, $b);
	echo "$a $op $b = $resultado <br>";
}
echo '<br>';
executar2(100, 100, '+', $soma1);
//executar2(200, 200, '+', soma2);