<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Availiando os métodos da documentação da string,
// qual o método que a posição do texto 'abc'
// string '!AbcaBcabc' retorne 1?

echo strpos('!AbcaBcabc', 'abc') . '<br>'; // Considerou as letras maiúsculas
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));