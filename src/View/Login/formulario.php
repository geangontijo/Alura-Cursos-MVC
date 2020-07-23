<?php require __DIR__ . '/../cabecalho.php'; ?>

<form method="POST" action="/realiza-login">
    <div class="form-row">
        <div class="col-md-6">
            <label for="email">Email</label>
            <input id="email" name="email" type="text" class="form-control" placeholder="Email">
        </div>
        <div class="col-md-6">
            <label for="senha">Senha</label>
            <input id="senha" name="senha" type="text" class="form-control" placeholder="Senha">
        </div>
        <div class="col-md-12 d-flex flex-row-reverse mt-2">
            <button type="submit" class="btn btn-primary ">Entrar</button>
        </div>
    </div>
</form>

<?php require __DIR__ . '/../rodape.php'; ?>