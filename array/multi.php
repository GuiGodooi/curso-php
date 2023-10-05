<div class="titulo">Multidimensionais</div>

<?php
//criando 2 arrays em 1
$dados = [
    [
        "nome" => "Gui",
        "idade" => 24,
        "naturalidade" => "Brasileiro"
    ],
    [
        "nome" => "Mariana",
        "idade" => 20,
        "naturalidade" => "Americana"
    ],
];

//imprimindo indice
print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];


$dados [] = [
    "nome" => "Daniela",
    "idade" => 22,
    "naturalidade" => "Mexicana"
];


echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

//adicionando
$dados[2]["vizinhos"] = "Chaves";
echo '<br';
print_r($dados[2]);

//removendo
unset($dados[1]);
echo '<br>';
print_r($dados);