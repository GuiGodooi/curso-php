<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = ['Laranja', 'Abacaxi'];
//FRUTAS[0] = 'banana';   <--- Não pode ser alterado;
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Focus"];
echo '<br>' . CARROS["Fiat"];

//outra maneira de criar
define('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES[1];