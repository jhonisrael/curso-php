<div class="titulo">Operadores lógicos</div>

<?php
echo "<p> Negação lógica <p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); //not negação

echo "<p> Tabela verdade 'AND' (E) <p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
echo'<br>';
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);

echo "<p> Tabela verdade 'OR' (OU) <p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo'<br>';
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p> Tabela verdade 'XOR' (OU Exclusivo) <p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);
echo'<br>';
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p> class='divisão'>Exemplo <p><hr>";
$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;
$criterioHomem = ($idade >=65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aponsetar -> $podeSeAposentar <br>";

if ($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo ";
} elseif ($idade >=65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo "Vai ter que trabalhar mais um pouco...";
}

?>

<style>
    p {
        margin-bottom: 0px;
        font-weight: bold;
    }

    hr {
        margin-top: -30px;
    }
</style>