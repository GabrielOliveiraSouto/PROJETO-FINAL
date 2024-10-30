<?php

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/PacienteController.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];

echo $request;

switch ($request) {
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/':
        $controller = new PacienteController();
        $controller->showForm();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/paciente/save':
        $controller = new PacienteController();
        $controller->savePaciente();
        break;
    default:
        http_response_code(404);
        echo "Página

 não encontrada.";
        break;
}
