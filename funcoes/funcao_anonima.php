<div class="titulo">Funções Anônimas</div>

<?php
$soma = function ($a, $b){
    return $a + $b;
};

echo $soma(1, 1) . '<br>';

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado";
}

executar(2, 3, '+', $soma);

$multiplicacao = function($a, $b){
    return $a * $b;
};

executar(2, 3, '*', $multiplicacao);

function divisao($a, $b){
    return $a / $b;
}
//xecutar (4, 2, '/', divisao);