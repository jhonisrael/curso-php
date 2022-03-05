<div class="titulo">Desafio For</div>

<!--
    usar o for...
    #
    ##
    ###
    ####
    #####
    1) Usar incremento $i++
    2) Não usar incremento $i++
-->
<?php

$array = ['#', '##', '###', '####', '#####'];


for ($i=0; $i < count($array); $i++) { 
    echo "$array[$i]<br>";
}

echo "<hr>";

// resposta do prof:
$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo "<hr>";

for(
    $impressao2 = '#';
    $impressao2 !== '######';
    $impressao2 .= '#'
) {
    echo "$impressao2 <br>";
}