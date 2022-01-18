<div class="titulo"> Switch </div>

<?php 
$categoria = 'luxo';
$preco = 0.0;
$carro = '';

if ($categoria === 'luxo') {
    $carro = 'mercedes';
    $preco = 250000;
} elseif ($categoria === 'SUV') {
    $carro = 'renegade';
    $preco = 80000;
} elseif ($categoria === 'sedan') {
    $carro = 'etios';
    $preco = 55000;
} else {
    $carro = 'mobi';
    $preco = 33000;
}

$precoformatado = number_format( $preco, 2, ',', '.');
echo "<p> Carro: $carro<br> preco: R$ $precoformatado</p>";


$categoria = 'luxo';
switch (strtolower($categoria)) {
    case 'luxo': {
        $carro = 'mercedes';
        $preco = 250000;
        break;
    }
    case 'suv':
    case 'suv basico':
        $carro = 'renegade';
        $preco = '80000';
        break;
    case 'sedan':
        $carro = 'etios';
        $preco = 55000;
        break;
    default:
        $carro = 'mobi';
        $preco = 33000;
        break;
    }
    
    $precoformatado = number_format($preco, 2, ',', '.');
    echo "<p> Carro: $carro<br> preco: R$ $precoformatado</p>";
