<?php require_once __DIR__ . '/../cabecalho.php'; ?>
<form action="cadastrar-novo-curso<?= isset($curso) ? '?id=' . $curso->getId() : ''; ?>" method="POST">
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control" value="<?= isset($curso) ? $curso->getDescricao() : '' ?>">
        <div class="d-flex flex-row-reverse">
            <button class="btn btn-primary mt-3" name="submit" type="submit">Salvar</button>
        </div>
    </div>

</form>
<?php require_once __DIR__ . '/../rodape.php';
