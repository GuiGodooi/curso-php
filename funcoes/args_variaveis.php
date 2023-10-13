<div class="titulo">Argumentos e Variáveis</div>

<?php
function soma($a, $b){
    return $a + $b;
}

echo soma(14, 15) . 'br';

//Quando utilizamos os três pontos antes do parâmetro
//associado ao argumento da minha função 
function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);