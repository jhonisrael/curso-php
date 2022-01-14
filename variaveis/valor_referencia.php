<div class="titulo">Valor Vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

//Atribuição por valor
$variavelvalor = $variavel;
echo "<br> $variavelvalor";
$variavelvalor = 'novo valor';
echo "<br> $variavel";
echo " $variavelvalor";

//Atribuição por referência
$variavelreferencia = &$variavel;
$variavelreferencia = 'mesma referencia';

echo "<br> $variavel $variavelreferencia";

