<div class="titulo">Operações Aritmeticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1.0);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7,4), '<br>'; // Remove as casas decimais
echo round(7 / 4), '<br>'; // Arredondando o valor
echo 7 % 4, '<br>'; // Resto da divisão
// echo intdiv(7,0); # Erro!
echo 4 ** 2, '<br>';

// Precedência de operadores:
// () => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>'; // 4 está elevado à 2
echo ((2 + 3) * 4) ** 2, '<br>';