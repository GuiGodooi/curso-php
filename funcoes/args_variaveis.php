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


$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array);

function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependentes: $dep <br>";
        }
    }
}

echo '<br>';
membros("Guilherme Godoi", "Rafael", "Murilo");

echo '<br>';
membros("Roberto", "Junior");