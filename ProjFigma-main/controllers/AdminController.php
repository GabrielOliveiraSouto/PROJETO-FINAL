<?php

require_once '../models/Admin.php';

class AdminController {

    public function showCadastroAdmin() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/paginas/administrador/cadastroAdm.html';
    }

    public function saveAdmin() {
        $admin = new Admin();// Recebe dados do formulário
        $admin ->nome = $_POST['nome'];
        $admin ->cpf = $_POST['cpf'];
        $admin ->data_nascimento = $_POST['data_nascimento'];
        $admin ->sexo= $_POST['sexo'];
        $admin ->etnia = $_POST['etnia'];
        $admin ->pais = $_POST['pais'];
        $admin ->area_atuacao = $_POST['area_atuacao'];
        $admin ->Rg = $_POST['rg'];
        $admin ->email_sp_medical_group = $_POST['email_sp_mecical_group'];
        $admin ->email = $_POST['email'];
        $admin ->telefone = $_POST['telefone'];

        // Salva no banco de dados
        if ($admin->saveAdm()) {
            // Redireciona para a página de listagem
            header('Location: /ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/admin/home');
        } else {
            echo "Erro ao salvar o registrar!";
        }
    }
    public function listPaciente() {
        // Pega todos os livros do banco de dados
        $paciente = new Paciente();
        $paciente = $paciente->getAll();

        // Exibe a lista de livros
        require_once '../views/book_list.php';
    }
    
}
