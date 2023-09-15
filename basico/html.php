<!-- Formas de interação -->
<div class="titulo">
    Integração HTML
</div>

<!-- Podemos utilizar o PHP dentro de HTML -->
<h1>
    <?php
        echo 'Olá';
        echo '<small>';
        echo ' Mundo!';
        echo '<small>';
    ?>
</h1>

<!-- Podemos colocar PHP e gerar o HTML direto -->
<?= "<div>Outra forma de me 'expressar' !</div>"; ?>

<br>

<!-- Colocando as 2 coisas ao mesmo tempo -->
<div><button><?= "Legal" ?></button></div>