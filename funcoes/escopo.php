<div class="titulo">Escopo</div>

<?php
function imprimirMensagem(){
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

imprimirMensagem();
imprimirMensagem();
imprimirMensagem();

$variavel = 1;

function trocarValor(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValor();
echo "Depois: $variavel <br>";

function trocaValorDeVerdade(){
    /*Acessa a variável de fora no caso => 1 */
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel<br>";
}

echo "Antes: $variavel<br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

//Retorna um valor vazio => NULL;
var_dump(trocaValorDeVerdade());