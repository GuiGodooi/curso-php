<!-- Formas de interação -->
<div class="titulo">
    Integração CSS
</div>

<!-- Podemos utilizar o PHP dentro de HTML -->
<h1 center>
    <?php
        echo 'Olá';
        echo '<small>';
        echo ' Mundo!';
        echo '<small>';
    ?>
</h1>

<!-- Podemos colocar PHP e gerar o HTML direto -->
<?= "<div center azul>Outra forma de me 'expressar' !</div>"; ?>

<br>

<!-- Colocando as 2 coisas ao mesmo tempo -->
<div center><button dobro><?= "Legal" ?></button></div>

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: 600;
        border-radius: 10px;
    }

    /* Qualquer elemento HTML que tiver uma propriedade chamada center
    ou qualquer elemento HTML que tem uma propriedade chamada azul: . . .
    Aplicando no H1 */
    [center]{
        display: flex;
        justify-content: center;
    }

    <?= "[azul]" ?>{
        color: #4286f4
    }

    [dobro]{
        font-size: <?= 10 - 8 ?>rem;
    }
</style>