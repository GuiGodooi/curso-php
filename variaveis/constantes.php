<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS . '!';
// TAXA_DE_JUROS = 2.5 ... Não funciona!
const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$variavelValor = 2.8;
// const NOVISSIMA_TAXA = $variavelValor; ===> Não funciona!
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>Linha: ' . __LINE__;
echo '<br>' . __LINE__;
echo '<br>' . __DIR__;