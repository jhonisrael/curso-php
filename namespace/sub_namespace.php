<?php namespace App; ?>
<div class="titulo">Sub-Namespace</div>

<?php 
echo __NAMESPACE__ . '<br>';
const constante = 123;
echo constante . '<br>';

namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const constante = 456;

namespace App\Principal\Especifico;
echo __NAMESPACE__ . '<br>';
const constante = 789;

echo constante . '<br>';
echo constant('\\' . __NAMESPACE__ . '\constante') . '<br>';
echo \App\constante . '<br>';
