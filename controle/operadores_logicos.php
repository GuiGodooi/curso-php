<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true); //true
var_dump(true && false); //false
var_dump(false && true); //false
var_dump(false && false); //false
echo '<br>'; //tambem podemos usar o and!
var_dump(true and true); //true
var_dump(true and false); //false
var_dump(false and true); //false
var_dump(false and false); //false

echo '<br>';
var_dump(true && 3 > 2 && 7 <= 7); //true

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true); //true
var_dump(true || false); //true
var_dump(false || true); //true
var_dump(false || false); //false
echo '<br>';
var_dump(true or true); //true
var_dump(true or false); //true
var_dump(false or true); //true
var_dump(false or false); //false

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo) </p><hr>";
var_dump(true xor true); //false
var_dump(true xor false); //true
var_dump(false xor true); //true
var_dump(false xor false); //false
echo "<br>";
//Utilizando o operador de diferente, será a mesma reposta do XOR
var_dump(true != true); //false
var_dump(true != false); //true
var_dump(false != true); //true
var_dump(false != false); //false

echo "<br>";
echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';

$pagouProvidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouProvidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar<br>";

if($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
}elseif ($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
} else{
    echo "Vai ter que trabalhar mais um pouco...";
}