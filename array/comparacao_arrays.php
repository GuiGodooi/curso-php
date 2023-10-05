<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['Nome'=> 'Maria', 'idade' => 20];
$arr2 = ['Nome'=> 'Maria', 'idade' => 20];

var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr3 = ['idade' => 20, 'Nome' => 'Maria'];
echo '<br>';
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);

$arr4 = ['idadae' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);