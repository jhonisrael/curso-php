<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elsa", "Rapunzel", "Branca de neve", "Cinderela"];
$indice = array_rand($nomes);

echo "<div center><h1>$nomes[$indice]</h1></div>";

?>

<style>
    [center] {
        display: flex; 
        justify-content: center;
        color: brown;
        font-size: 150%;
    }
</style>