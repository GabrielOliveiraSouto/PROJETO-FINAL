<?php

require_once '../models/Paciente.php';

class PacienteController {

    public function showCadastroPaciente() {
        require_once '../views/paginas/paciente/cadastroPaci.html';
    }

    public function savePaciente() {
        $paciente = new Paciente();// Recebe dados do formulário
        $paciente ->nome = $_POST['Nome'];
        $paciente ->cpf = $_POST['CPF'];
        $paciente ->data_nascimento = $_POST['Data_de_nascimento'];
        $paciente ->sexo= $_POST['Sexo'];
        $paciente ->etnia = $_POST['Etnia'];
        $paciente ->pais = $_POST['Pais'];
        $paciente ->cidade = $_POST['Cidade'];
        $paciente ->estado = $_POST['Estado'];
        $paciente ->endereco = $_POST['Endereco'];
        $paciente ->telefone = $_POST['Telefone'];
        $paciente ->email = $_POST['E-mail'];

        // Salva no banco de dados
        if ($paciente->savePaci()) {
            // Redireciona para a página de listagem
            header('Location: /ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/home');
        } else {
            echo "Erro ao cadastrar";
        }
    }

    public function listPaciente() { // Pega todos os livros do banco de dados
       
        $paciente = new Paciente();
        $pacientes = $paciente->getAll();
        require_once '../views/paginas/administrador/listaPaci.php';// Exibe a lista de livros
    }

    public function showUpdateForm($id) {
        $paciente = new Paciente();
        $pacientes = $paciente->getById($id);
        include '../views/paginas/administrador/updatePaciente.php'; // Inclua o arquivo do formulário de atualização
    }

    // Método para atualizar um livro
    public function updatePaciente() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente();// Recebe dados do formulário
            $paciente ->nome = $_POST['nome'];
            $paciente ->cpf = $_POST['cpf'];
            $paciente ->data_nascimento = $_POST['data_nascimento'];
            $paciente ->sexo= $_POST['sexo'];
            $paciente ->etnia = $_POST['etnia'];
            $paciente ->pais = $_POST['pais'];
            $paciente ->cidade = $_POST['cidade'];
            $paciente ->estado = $_POST['estado'];
            $paciente ->endereco = $_POST['endereco'];
            $paciente ->telefone = $_POST['telefone'];
            $paciente ->email = $_POST['email'];
            $paciente->id = $_POST['id'];

            if ($paciente->update()) {
                header('Location: /ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/lista');
            } else {
                echo "Erro ao atualizar o livro.";
            }
        }
    }
    public function deletePacienteId() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente();
            $paciente->id = $_POST['id'];

            if ($paciente->deleteId()) {
                header('Location: /ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/lista');
            } else {
                echo "Erro ao excluir paciente>";
            }
        }
    }
}
