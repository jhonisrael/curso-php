<div class="titulo"> Desafio PI </div>

<?php
echo pi();
$pi = 3.14;

if($pi === pi()) {
    echo "<br> iguais!";
} else {
    echo "<br> diferentes!";
}

//operador relacional 
$piErrado = 2.8;

//resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if($pi - pi() <= 0.01) {
    echo '<br> Praticamente iguais!';
}
if($pi - $piErrado <= 0.01) {
    echo '<br> Praticamente iguais!';
} else{
    echo '<br> Valor errado!!';
}