<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('false'); //string
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// Fazer as regras de conversão
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apnenas zero será false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.00000001);
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) " "); /// Todo resto é true
echo '<br>' . var_dump((bool) "00"); //  
echo '<br>' . var_dump((bool) "false");