<?php

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/PacienteController.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/PROJETO-FINAL/ProjFigma-main/public/':
        $controller = new PacienteController();
        $controller->home();
        break;
    case '/PROJETO-FINAL/ProjFigma-main/':
        $controller = new PacienteController();
        $controller->listBooks();
        break;
    case '/PROJETO-FINAL/ProjFigma-main/paciente/cadastro':
        $controller = new PacienteController();
        $controller->saveBook();
        break;
    default:
        http_response_code(404);
        echo "Página

 não encontrada.";
        break;
}
