<div class="titulo">Visibilidade</div>

<?php
class A {
	public $publico = 'publico';
	protected $protegido = 'protegido';
	private $privado = ' privado';

	public function mostrarA() {
		$this->naoMostrar();
		echo "Class A) publico = {$this->publico}<br>";
		echo "Class A) protegido = {$this->protegido}<br>";
		echo "Class A) privado = {$this->privado}<br>";
	}

	protected function vaiPorHeranca() {
		echo 'Não vu imprimir! <br>';
	}

	private function naoMostrar() {
		echo 'Serei transmitido por herança! <br>';
	}
}

$a = new A();
$a->mostrarA();

echo "Fim!";

class B extends A {
	public function mostrarB() {
		echo "Clas B) publico = {$this->publico}<br>";
		echo "Class B) protegido = {$this->protegido}<br>";
		echo "Class B) privado = {$this->privado}<br>";
       
       parent::vaiPorHeranca;
	}
}

echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();
// $b->vaiPorHeranca();