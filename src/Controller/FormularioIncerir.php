<?php

namespace Alura\Cursos\Controller;

require_once __DIR__ . '/../../vendor/autoload.php';

class FormularioIncerir extends ControleHtml implements InterfaceControler
{
    public function processaRequisicao(): void
    {
        echo $this->render('/Cursos/formulario.php', ['titulo' => 'Cadastrar curso']);
    }
}
