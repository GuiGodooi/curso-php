<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // não interpola de forma alguma
echo "<br> $numero"; 

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objeto"; // Aqui sim, ele vai interpolar
echo "<br>Eu tenho 5 {$objeto}s.";
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s";