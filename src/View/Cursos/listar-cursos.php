<?php require_once __DIR__ . '/../cabecalho.php'; ?>
<a href="/novo-curso" class="btn btn-primary mb-3">Novo curso</a>

<ul class="list-group">
    <?php foreach ($cursos as $curso) : ?>
        <li class="list-group-item d-flex justify-content-between">
            <?= $curso->getDescricao(); ?>

            <span>
                <a href="/alterar-curso?id=<?= $curso->getId() ?>" class="btn btn-sm btn-info">Editar</a>
                <a href="/remover-curso?id=<?= $curso->getId() ?>" class="btn btn-sm btn-danger">Remover</a>
            </span>
        </li>
    <?php endforeach; ?>
</ul>
<?php require_once __DIR__ . '/../rodape.php';
