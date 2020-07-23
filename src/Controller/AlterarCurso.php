<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManager;

class AlterarCurso extends ControleHtml implements InterfaceControler
{
    private EntityManager $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (is_null($id) || $id === false) {
            header('Location : /listar-cursos');
            exit();
        }

        $cursoRepository = $this->entityManager->getRepository(Curso::class);
        echo $this->render('/Cursos/formulario.php', [
            'curso' => $cursoRepository->find($id),
            'titulo' => 'Alterar curso',
        ]);
    }
}
