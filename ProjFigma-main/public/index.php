<?php

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/PacienteController.php';
require_once '../controllers/MedicoController.php';
require_once '../controllers/AdminController.php';

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
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/medico/home':
        require_once '../views/paginas/medico/homepageMed.html';
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/admin/home':
        require_once '../views/paginas/administrador/homepageAdm.html';
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/cadastro':
        $controller = new PacienteController();
        $controller->showCadastroPaciente();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/save':
        $controller = new PacienteController();
        $controller->savePaciente();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/lista':
        $controller = new PacienteController();
        $controller->listPaciente();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/update':
        $controller = new PacienteController();
        $controller->updatePaciente();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/delete-paciente/';
        $controller = new PacienteController();
        $controller->deletePacienteId();
        break;
    case (preg_match('/\/ProjetoSPMED_Final\/PROJETO-FINAL\/ProjFigma-main\/public\/paciente\/update-paciente\/(\d+)/', $request, $matches) ? true : false): 
        $id = $matches[1];
        $controller = new PacienteController();
        $controller->showUpdateForm($id);
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/medico/cadastro':
        $controller = new MedicoController();
        $controller->showCadastroMedico();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/medico/save':
        $controller = new MedicoController();
        $controller->saveMedico();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/admin/cadastro':
        $controller = new AdminController();
        $controller->showCadastroAdmin();
        break;
    case '/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/admin/save':
        $controller = new AdminController();
        $controller->saveAdmin();
        break;
    default:
        http_response_code(404);
        echo "Página não encontrada.";
        break;
}
