<div class="titulo">Desafio Palindromo</div>

<?php

function Palindromo($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
}

$original = "Pai";
if(Palindromo($original)){ 
    echo "Palindromo"; 
}
else { 
echo "Não é Palindromo"; 
}