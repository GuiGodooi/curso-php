<div class="titulo">String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação utilizamos ponto
echo "Nós também" . ' somos', '<br>';
echo "Número é " . 123;
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\'' . "\"Teste\" " . "\\";

print("<br>Também exite a função print");
print"<br>Também exite a função print sem ()";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7 ,6); //parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');