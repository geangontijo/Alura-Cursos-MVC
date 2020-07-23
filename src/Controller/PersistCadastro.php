<?php

namespace Alura\Cursos\Controller;

require_once __DIR__ . '/../../vendor/autoload.php';

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMessageTrait;
use Alura\Cursos\Infra\EntityManagerCreator;

class PersistCadastro implements InterfaceControler
{
    use FlashMessageTrait;
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator)->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        $curso = new Curso();
        $curso->setDescricao($descricao);

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if (!is_null($id) && $id !== false) {
            $curso->setId($id);
            $this->defineMensagem('Curso alterado', 'success');
            $this->entityManager->merge($curso);
        } else {
            $this->defineMensagem('Curso cadastrado', 'success');
            $this->entityManager->persist($curso);
        }
        $this->entityManager->flush();
        header('Location: /listar-cursos');
    }
}
