<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-info mb-2">
        <a class="navbar-brand" href="/listar-cursos">Alura Cursos</a>
        <?php if (isset($_SESSION['logado'])) : ?>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <a href="/logout" class="btn  ml-auto">Logout</a>
            </div>
        <?php endif ?>
    </nav>
    <div class="container">
        <h1 class="text-center"><?= $titulo ?></h1>

        <?php if (isset($_SESSION['mensagem'])) : ?>
            <div class="alert alert-<?= $_SESSION['tipoMensagem'] ?>">
                <?= $_SESSION['mensagem']; ?>
            </div>
        <?php endif ?>