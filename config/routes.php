<?php

use Alura\Cursos\Controller\AlterarCurso;
use Alura\Cursos\Controller\Deslogar;
use Alura\Cursos\Controller\FormularioIncerir;
use Alura\Cursos\Controller\FormularioLogin;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\PersistCadastro;
use Alura\Cursos\Controller\RealizarLogin;
use Alura\Cursos\Controller\RemoverCurso;


$rotas = [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioIncerir::class,
    '/cadastrar-novo-curso' => PersistCadastro::class,
    '/remover-curso' => RemoverCurso::class,
    '/alterar-curso' => AlterarCurso::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizarLogin::class,
    '/logout' => Deslogar::class
];


return $rotas;
