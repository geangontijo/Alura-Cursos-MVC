<?php

namespace Alura\Cursos\Controller;

abstract class ControleHtml
{
    public function render(string $caminhoRelativo, array $data): string
    {
        extract($data);
        ob_start();
        require __DIR__ . '/../View' . $caminhoRelativo;
        $html = ob_get_clean();
        unset($_SESSION['mensagem']);
        unset($_SESSION['tipoMensagem']);

        return $html;
    }
}
