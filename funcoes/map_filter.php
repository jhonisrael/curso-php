<div class="titulo">Map & Filter</div>

<?php
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais = [];

foreach($notas as $notas) {
    $notasFinais[] = round($notas);
}

print_r($notasFinais);

echo '<br>';
$notas = [5.8, 7.3, 9.8, 6.7];

$notasFinais2 = array_map('round', $notas);
print_r($notasFinais2);

$apenasOsAprovados = [];

foreach($notas as $notas) {
    if($notas >= 7) {
    $apenasOsAprovados[] = $notas;
   }
}

echo '<br>';
print_r($apenasOsAprovados);

function aprovados($notas) {
    return $notas >= 7;
}

echo '<br>';
$notas = [5.8, 7.3, 9.8, 6.7];

$apenasOsAprovados2 = array_filter($notas, 'aprovados');
print_r($apenasOsAprovados2);

function calculoLegal($notas) {
    $notaFinal = round($notas) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}
echo '<br>';
$notasFinais3 = array_map('calculoLegal', $notas);
print_r($notasFinais3);
