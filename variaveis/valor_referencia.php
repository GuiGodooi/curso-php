<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

//Aqui vamos ter 2 espaços de memória, que contem o mesmo
//conteúdo, por que foi feito uma cópia desse valor,
//inicia de tal forma que agora conseguimos 
//evoluir esses dois valores independentes;

//Atribuição por Valor
$variavelValor = $variavel;
echo "<br> $variavelValor";
$variavelValor = 'novo valor';
echo "<br> $variavel";
echo " $variavelValor";

//Atribuição por Referência
$variavelReferencia = &$variavel; //Ela aponta para o mesmo local da 4° linha;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";