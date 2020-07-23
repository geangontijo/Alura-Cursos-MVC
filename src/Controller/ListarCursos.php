<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

require_once __DIR__ . '/../../vendor/autoload.php';

class ListarCursos extends ControleHtml implements InterfaceControler
{
    private $entityManager;
    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->entityManager  = $entityManager;
    }
    public function processaRequisicao(): void
    {
        $repositorioDeCursos = $this->entityManager->getRepository(Curso::class);
        echo $this->render('/Cursos/listar-cursos.php', [
            'cursos' => $repositorioDeCursos->findAll(),
            'titulo' => 'Lista de cursos'
        ]);
    }
}
