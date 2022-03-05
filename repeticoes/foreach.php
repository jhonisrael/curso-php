<div class="titulo">Laço Foreach</div>

<?php
$array = [
    1 => 'domingo',
    'segunda',
    'terça',
    'quarta',
    'quinta',
    'sexta',
    'sabado'
];

foreach ($array as $valor) {
    echo "$valor <br>";
}

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a','e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
   ];

foreach ($matrix as $linha) {
    foreach($linha as $letra) {
        echo "$letra";
    }
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];  // o & pega o valo referenciado e o muda de acordo...
foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}