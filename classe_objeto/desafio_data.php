<div class="titulo">Desafio Data</div>

<?php
class Data {
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;
    public $pessoa = "";

    public function apresentar() {
        return "{$this->pessoa} {$this->dia} / {$this->mes} / {$this->ano}<br>";
    }
}

//$d1 = new Data();
//echo $d1->apresentar();

$aniversario = new Data();
$aniversario->pessoa = "Eu Jhonata faço aniversário em: ";
$aniversario->dia = 29;
$aniversario->mes = 05;
$aniversario->ano = 1994;
echo $aniversario->apresentar();