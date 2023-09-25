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
    echo "Serei impresso novamente?<br>";
};

if(false){
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else{
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if(false){
    echo "Passo A<br>";
} else if(false){
    echo "Passo B<br>";
} elseif(true){
    echo "Passo C<br>";
} else {
    echo "Último Passo<br>";
};

echo "Fim<br>";