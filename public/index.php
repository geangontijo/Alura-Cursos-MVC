<?php

require_once __DIR__ . '/../src/Controller/FormularioIncerir.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\FormularioIncerir;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\PersistCadastro;

session_start();
$requisicao = $_SERVER['PATH_INFO'];
$rotas = require_once __DIR__ . '/../config/routes.php';

$rotaLogin = stripos($requisicao, 'login');
if (!isset($_SESSION['logado']) && $rotaLogin === false) {
    header('Location: /login');
    exit();
}

if (!array_key_exists($requisicao, $rotas)) {
    http_response_code(404);
    exit();
}

$classeControlador = $rotas[$requisicao];
/** * @var InterfaceControle $controler */
$controler = new $classeControlador();
$controler->processaRequisicao();
