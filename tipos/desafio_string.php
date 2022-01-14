<div class="titulo"> Desafio string </div>

<?php 
//enunciado:
//avaliando os metodos da documentação da string
//qual o metodo que a posiçao do texto 'abc'
//na string '!AbcaBcabc' retorne 1?

echo strpos ('!AbcaBcabc', 'abc') . '<br>';
echo stripos ('!AbcaBcabc', 'abc') . '<br>';


echo strpos (strtolower ('!AbcaBcabc'), strtolower('ABC'));





