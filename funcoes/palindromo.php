<div class="titulo">Desafio Palindromo</div>

<?php

function palindromo($palavra) {
	$ultimoIndice = strlen($palavra) - 1;
	for($i = 0; $i <= $ultimoIndice; $i++) {
		if ($palavra[$i] !== $palavra[$ultimoIndice - $i]){
			return 'Não';
		}
	}
	return 'Sim';
}

	echo palindromo('arara') . '<br>';
	echo palindromo('porco') . '<br>';


 function PalindromoSimples($palavra) {
 	return $palavra === strrev($palavra) ? 'Sim': 'Não';
 }
 
 echo PalindromoSimples('arara') . '<br>';
 echo PalindromoSimples('porco') . '<br>';