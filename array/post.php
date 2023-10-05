<div class="titulo">$_POST</div>

<form action="#" method="post">
    <!-- O nome vai servir como chave para os parametros enviado no $_POST -->
    <input type="text" name="Nome">
    <input type="text" name="Sobrenome">
    <select name="Estado">
        <option value="AC">Acre</option>
        <option value="SP">São Paulo</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php
print_r($_GET);
echo '<br>';
print_r($_POST);

//Contando a quantidade de requisição 
echo '<br>' . count($_POST);