<div class="titulo">Variáveis</div>

<?php
// Utilizamos $ para guaradar a variável
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;

echo 'O Resultado é: ' . $soma;
echo '<br>';
echo isset($soma);

$variavel = 10; //tipagem fraco, dinamica
echo '<br>' . $variavel;

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;