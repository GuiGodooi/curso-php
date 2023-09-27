<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");
//var_dump($lista);
print_r($lista);
echo '<br>';
$lista[0] = 1234; //alterando array
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[100]); //null

$texto = 'Esse é um texto teste';
echo '<br>' . $texto[0]; //cuidado!
echo '<br>' . mb_substr($texto, 10, 1); //correto!