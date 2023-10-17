<div class="titulo">Usando Tipos</div>

<?php
function somar1($a, $b){
    echo "<span>Somando1 $a + $b = </span>";
    return $a + $b;
}

echo somar1(1, 2) . '<br>';
echo somar1(1.7, 2.5) . '<br>';
echo somar1(1, '4dois') . '<br>';

function somar2(int $a, int $b){
    echo "<span>Somando2 $a + $b = </span>";
    return $a + $b;
}

echo somar2(1, 2) . '<br>';
echo somar2(1.7, 2.5) . '<br>';
//echo somar2(1, '4dois') . '<br>';

//Estamos dizendo a ele que o resultado precisa ser INT
function somar3($a, float $b): int{
    echo "<span>Somando3 $a + $b = </span>";
    return $a + $b;
}

echo somar3(1, 2) . '<br>';
echo somar3(1.7, 2.5) . '<br>';
//echo somar3(1, '4dois') . '<br>';