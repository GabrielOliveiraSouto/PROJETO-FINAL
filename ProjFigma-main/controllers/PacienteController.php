<?php

require_once '../models/Paciente.php';

class PacienteController {

    public function showCadastroPaciente() {
        // Exibe o formulário de cadastro de livros
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
        require_once '../views/paginas/paciente/listaPaci.php';// Exibe a lista de livros
    }
}
