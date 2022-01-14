<div class="titulo">Operadores Relacionais </div>

<?php 
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 != 1);
var_dump(1 <> 1);
var_dump(1 <= 7);
var_dump(4 < 23); 


var_dump(1 == '1');
var_dump(1 === '1');
var_dump(1 != '1');
var_dump(1 !== '1');

echo '<p> relacionais no IF/ELSE <p><hr>';

$idade = 17;
if ($idade < 18) {
    echo "menor de idade = $idade anos <br>";
} elseif ($idade <= 65) {
    echo "adulto = $idade anos <br>";
} else {
    echo "terceira idade! = $idade anos";
}

echo '<p> Spaceship <p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo '<p> Valores pode ser verdadeiros ou falso <p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");


?>

<style>
    p {
        margin-bottom: 0px;
    }

    hr {
        margin-top: -30px;
    }
</style>