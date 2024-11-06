<?php

require_once '../models/Medico.php';

class MedicoController {

    public function showCadastroMedico() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/paginas/medico/cadastroMed.html';
    }

    public function saveMedico() {
        $medico = new Medico();// Recebe dados do formulário
        $medico ->nome = $_POST['nome'];
        $medico ->cpf = $_POST['cpf'];
        $medico ->data_nascimento = $_POST['data_nascimento'];
        $medico ->sexo= $_POST['sexo'];
        $medico ->etnia = $_POST['etnia'];
        $medico ->pais = $_POST['pais'];
        $medico ->unidade = $_POST['unidade'];
        $medico ->crm = $_POST['crm'];
        $medico ->email_sp_medical_group = $_POST['email_sp_mecical_group'];
        $medico ->email = $_POST['email'];
        $medico ->telefone = $_POST['telefone'];

        // Salva no banco de dados
        if ($medico->saveMed()) {
            // Redireciona para a página de listagem
            header('Location: /ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/admin/home');
        } else {
            echo "Erro ao salvar o livro!";
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
