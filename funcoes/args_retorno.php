<div class="titulo">Argumentos & Retornos</div>

<!-- Criar uma função chamada obterMsg e ela não vai
receber nenhum valor inicialmente e vai retornar 
alguma mensagem e depois iremos passar alguns paramentros -->

<?php
function obterMsg(){
    return 'Seja Bem Vindo(a)!';
}

obterMsg();
$m = obterMsg();
echo $m;
echo '<br>', obterMsg();
echo '<br>';
var_dump(obterMsg());

function obterMsgComNome($nome){
    return "Bem Vindo, {$nome}";
}

echo '<br>', obterMsgComNome('Gui');
echo '<br>', obterMsgComNome('Mario');

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 2;
echo '<br>', soma(20, 24);
echo '<br>', soma($x, $y);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3); //o 3 vai atrubuir ao valor 1
echo '<br>', $variavel;

//Recebendo uma referencia
function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;

}

trocaValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;