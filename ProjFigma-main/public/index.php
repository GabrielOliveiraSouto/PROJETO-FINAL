<?php

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/PacienteController.php';
require_once '../controllers/MedicosController.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];

echo $request;

switch ($request) {
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/':
        require_once '../views/paginas/homepagePadrao.html';        
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/login':
        require_once '../views/paginas/login.html';
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/home':
        require_once '../views/paginas/paciente/homepagePaci.html';        
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/cadastro':
        $controller = new PacienteController();
        $controller->showCadastroPaciente();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/save';
        $controller = new PacienteController();
        $controller->savePaciente();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/medico/cadastro':
        $controller = new MedicoController();
        $controller->showCadastroMedico();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/medico/save';
        $controller = new MedicoController();
        $controller->saveMedico();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/medico/home':
        require_once '../views/paginas/medico/homepageMed.html';        
        break;
    default:
    /*case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main':
        $controller = new PacienteController();
        $controller->savePaciente();
        break;*/
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}
