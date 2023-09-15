<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
    <!--Trazendo a fonte e estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercícios</h2>
    </header>
    <!-- Criando botões de Navegação -->
    <nav class="navegacao">
        <a href="<?= "{$_GET['dir']}/{$_GET['file']}.php" ?>" class="verde">Sem Formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <!-- O ponto serve para concatenar -->
            <!-- Fazendo requisição com 'dir' que seria o diretório  -->
            <?php
                //include($_GET['dir'] . "/teste.php");
                //ou
                //include("{$_GET['dir']}/{$_GET['file']}.php");
                //Assim pegamos pelos pâmetros da requisição (pasta e diretorio do arquivo)
                //Tambem conseguimos trazer pelo caminho absoluto
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>

    <footer class="rodape">
        Guilherme ₢ <?= date('Y'); ?>
    </footer>
</body>
</html>