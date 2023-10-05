<div class="titulo">Desafio FOR</div>

<!--
    Usar o for...
    #
    ##
    ###
    ####
    #####
    1)Pode usar incremento $i++;
    2)Não pode usar incremento $i++;
-->

<?php
$imp = '';
for($cont = 1; $cont <= 5; $cont++){
    $imp .= '#';
    echo "$imp <br>";
}

echo "<hr>";

for(
    $imp2 = '#';
    $imp2 !== '######';
    $imp2 .= '#'
    )
    {
    echo "$imp2 <br>";
}