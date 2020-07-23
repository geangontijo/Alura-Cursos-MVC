<?php

namespace Alura\Cursos\Controller;


class Deslogar implements InterfaceControler
{
    public function processaRequisicao(): void
    {
        session_destroy();
        header('Location: /login');
    }
}
