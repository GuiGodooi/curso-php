<div class="titulo">Laço FOR</div>

<?php
// Quantidade Determinada (de 1 até 5);
for($cont = 1; $cont <= 5; $cont++){
    echo "$cont <br>";
}

echo "<hr>";
//pegando o contador do 1° FOR
for(; $cont <= 10; $cont++){
    echo "$cont <br>";
}

echo "<hr>";

// Nessa lógica ele entra em loop eterno se não tiver o incremento;
for(; $cont <= 15; ){
    echo "$cont <br>";
    $cont++;
}

// Podendo alterar o indece 0 para 1 colocando 1 => 'Domingo' 
// e também alteramos o loop de 0 para 1, de < (menor) para <= (menor igual);
$array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

echo "<hr>";

print_r($array);
echo "<hr>";


for($i = 0; $i < count($array); $i++){
    echo "{$array[$i]} <br>";
}

//percorrendo uma matirx
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd'],
];
echo "<hr>";

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j ++) {
     echo "{$matrix[$i][$j]}";   
    }
    echo "<br>";
}