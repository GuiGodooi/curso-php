<div class="titulo">If Else</div>

<?php
/*
Nesta caso (true) ele irá imprimir os 2 textos,
agora se utilizamos false, ele imprime apenas o ultimo:

if(true)
    echo "Serei impresso?";
    echo "Serei impresso novamente?"; <- Apenas esse será impresso
*/

if(true)
    echo "Serei impresso? ";
    echo "Serei impresso novamente?<br>";

if(true){
    echo "Serei impresso?<br>";
    echo "Serei impresso novamente?";
}