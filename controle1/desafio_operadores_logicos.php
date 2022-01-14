<div class="titulo">Desafio Operadores Lógicos</div>

<!--
Dois trabalhos -> terça e quinta!
  - Se os dois forem executados -> tv 50' e sorvete
  - Se apenas um for executado -> tv 32' e sorvete
  - Se nenhum for executado -> fica em casa mais saudável
-->

<form action="#" method="POST">
  <div>
     <label for="t1">Trabalho 1 (terça)</label>
     <select name="t1" id="t1">
         <option value="1">Executado</option>
         <option value="0">Não Executado</option>
     </select>
  </div>
  <div>
     <label for="t1">Trabalho 2 (Quinta)</label>
     <select name="t2" id="t2">
         <option value="1">Executado</option>
         <option value="0">Não Executado</option>
     </select>
  </div>
  <button>executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
if (isset($_POST['t1']) && isset($_POST['t2'])) {
  $t1 = $_POST['t1'] === '1';
$t2 = !!$_POST['t2'];
$tv ='';
$sorvete = false;

if ($t1 && $t2) {
  $tv = '50"';
} elseif($t1 xor $t2) {
$tv = '32"';
}

if ($t1 or $t2) {
  $sorvete = true;
}

if ($tv) {
  $resultado = "vamos comprar uma tv de $tv";
} else {
  $resultado = "sem tv dessa vez";
}

$saudavel = !$sorvete;

if ($saudavel) {
  $resultado .= '<br> Estamos mais saudavel!';
}else {
  $resultado .= '<br> Sorvete liberado \o/';
}

echo "<p>$resultado</p>";
}
