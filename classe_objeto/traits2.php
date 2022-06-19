<div class="titulo">Traits #2</div>

<?php
trait validacao {
	public function validarString($str) {
		return isset($str) && $str !== '';
	}
}

trait validacaoMelhor {
	public function validarString($str) {
		return isset($str) && trim($str);
	}
}

class Usuario {
	use validacao, validacaoMelhor {
		validacaoMelhor::validarString insteadOf validacao;
	}
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));