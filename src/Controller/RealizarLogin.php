<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManager;

class RealizarLogin extends ControleHtml implements InterfaceControler
{
    private $usuarioRepository;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator)->getEntityManager();
        $this->usuarioRepository = $entityManager->getRepository(Usuario::class);
    }

    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if (is_null($email) || $email === false) {
            $_SESSION['tipoMensagem'] = 'danger';
            $_SESSION['mensagem'] = 'O e-mail digitado não é um e-mail válido';
            header('Location: /login');
            exit();
        }

        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        /** @var Usuario */
        $usuario = $this->usuarioRepository->findOneBy(['email' => $email]);

        if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)) {
            $_SESSION['tipoMensagem'] = 'danger';
            $_SESSION['mensagem'] = 'E-mail ou senha inválidos';
            header('Location: /login');
            exit();
        }
        $_SESSION['logado'] = true;

        header('Location: /listar-cursos');
    }
}
