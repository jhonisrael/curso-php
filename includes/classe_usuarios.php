<?php
require_once('classe_pessoas.php');
class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        //$this->nome = $nome;
        //$this->idade = $idade;
        $this->login = $login;
        parent::__construct($nome, $idade);
        $this->login = $login;
    }

    public function apresentar() {
        $login = "@{$this->login}: ";
       return $login . parent::apresentar();
    }
}
