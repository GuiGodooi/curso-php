<div class="titulo">While/ Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE){
    echo "while $contador <br>";
    $contador++;
}

//do {
// echo "while $contador <br>";
//  $contador++;
// } while ($contador < VALOR_LIMITE);

//for($contador = 0; $contador < VALOR_LIMITE; $contador++) {
//    echo "for $contador <br>";
//}

//Unica estrutura que a expressão vem depois do bloco. 
//Ele faz a 1° execução que está garantida
$contador = 0;
do{
    echo "Do-While $contador <br>";
    $contador++;
}while($contador < VALOR_LIMITE);

//Laço infinito utilizando break;
$contador = 0;
while(true){
   echo "While(true) $contador <br>";
   $contador++;
   if($contador >= VALOR_LIMITE) break; 
}