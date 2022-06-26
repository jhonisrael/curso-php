<div class="titulo">Polimorfismo</div>

<?php

class Comida {
   public $peso;
}

class Arroz extends Comida {

}
class ArrozAGrega extends Arroz {

}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
	public $peso;

	function __construct($peso) {
		$this->peso = $peso;
	}

	public function comer(Comida $comida) {
		$this->peso += $comida->peso;
	}
}

$c1 = new Arroz();
$c1->peso = 0.75;

$c2 = new ArrozAGrega();
$c2->peso = 1.00;

$c3 = new Sorvete();
$c3->peso = 1.00;

$p = new Pessoa(83.45);
$p->comer($c1);

echo $p->peso;