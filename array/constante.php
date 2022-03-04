<div class="titulo">Array constantes</div>

<?php
const FRUTAS = array('Laranja','Abacaxi');
// FRUTAS = 'teste';
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["fiat" => "Uno", "ford" => "Fiesta"];
// CARROS["BMW"] = '3251';
echo '<br>' . CARROS["fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];