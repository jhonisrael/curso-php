<div class="titulo">Membros estáticos</div>

<?php
class A {
	public $naoStatic = 'Variável de instancia';
	public static $static = 'Variável de classe Estática)';

    public function mostrarA() {
    	echo "Não estático = {$this->naoStatic}<br>";
    	//Tentativa 1
    	// echo "Estático = {$this->static}<br>";
    	//Tentativa 2
    	// echo "Estático = {self::$static}<br>";
    	echo "Estático = " . self::$static .'<br>';

    }

    public static function mostrarStaticA() {
    	// echo "Não estático = {$this->naoStatic}<br>";
    	echo "Estático = " . self::$static .'<br>';
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); // não é o ideal

echo '<br>';
echo A::$static,'<br>'; //acessar diretamnete pel classe
A::mostrarStaticA(); //acessar diretamnete pel classe

A::$static = 'Alterado membro de classe!';
echo A::$static,'<br>'; //acessar diretamnete pel classe
