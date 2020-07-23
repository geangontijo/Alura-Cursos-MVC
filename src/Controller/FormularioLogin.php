<?php

namespace Alura\Cursos\Controller;

class FormularioLogin extends ControleHtml implements InterfaceControler
{
    public function processaRequisicao(): void
    {
        echo $this->render('/Login/formulario.php', [
            'titulo' => 'Login'
        ]);
    }
}
