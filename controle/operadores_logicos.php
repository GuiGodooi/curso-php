<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true); //true
var_dump(true && false); //false
var_dump(false && true); //false
var_dump(false && false); //false
echo '<br>'; //tambem podemos usar o and!
var_dump(true and true); //true
var_dump(true and false); //false
var_dump(false and true); //false
var_dump(false and false); //false

echo '<br>';
var_dump(true && 3 > 2 && 7 <= 7); //true

echo "<p>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true); //true
var_dump(true || false); //true
var_dump(false || true); //true
var_dump(false || false); //false

?>

<style>
    p{
        margin-bottom: 0px;
        font-weight: 700;
    }

    hr{
        margin-top: 0px;
    }
</style>