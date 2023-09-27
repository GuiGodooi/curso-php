<div class="titulo">Operadores Relacionais</div>

<?php
echo "1 == 1?<br>";
var_dump(1 == 1);
echo '<br>';
echo "1 > 1?<br>";
var_dump(1 > 1);
echo '<br>';
echo "1 >= 1?<br>";
var_dump(1 >= 1);
echo '<br>';
echo "4 < 23?<br>";
var_dump(4 < 23);
echo '<br>';
echo "1 <= 7?<br>";
var_dump(1 <= 7);
echo '<br>';
echo "1 != 1?<br>";
var_dump(1 != 1);
echo '<br>';
echo "1 <> 1?<br>";
var_dump(1 <> 1);
echo '<br>';

var_dump(111 == '111'); // são iguais = True
var_dump(111 === '111'); // não são estritamente iguais = false
var_dump(111 != "111"); // não são diferentes = false
var_dump(111 !== '111'); // são estritamente diferentes = true
echo '<br>';

echo "<p class='divisao'>Relacionais no IF/ELSE</p><hr>";
$idade = 75;
if($idade < 18){
    echo "Menor de Idade = $idade anos!<br>";
} else if($idade < 65){
    echo "Adulto = $idade anos!<br>";
} else{
    echo "Terceira Idade = $idade anos!";
}

echo '<p class="divisao">Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);


echo '<p class="divisao">Valores podem ser Verdadeiro ou Falso</p><hr>';
var_dump(!!5); //dupla negação;
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");