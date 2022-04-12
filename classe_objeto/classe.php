<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    public $nome = "Anônimo";
    public $idade = "18";

    public function apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();
echo $c1->nome, '<br>';
$c1->nome = 'Ana Silva';
$c1->idade = 27.5;
echo $c1->nome, '<br>';
echo $c1->apresentar();

$c2 = new Cliente;
$c2->npme = 'Gabriel';
$c2->idade = 43;
echo $c2->apresentar();