<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Gui",
    "idade" => "24",
];

$dados2 = [
    "naturalidade" => "São Paulo"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indece = $dadosCompletos[$indice]";
echo '<br>';
echo "$dadosCompletos[$idade]";