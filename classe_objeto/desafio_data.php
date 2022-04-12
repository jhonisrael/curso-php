<div class="titulo">Desafio Data</div>

<?php
class Data {
    public $dia = "01";
    public $mes = "01";
    public $ano = "1970";

    public function apresentar() {
        return "{$this->dia} / {$this->mes} / {$this->ano}<br>";
    }
}

$d1 = new Data();
echo $d1->apresentar();