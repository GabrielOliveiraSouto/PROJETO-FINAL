<?php

require_once '../models/Paciente.php';

class PacienteController {

    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/paginas/paciente/cadastroPaci.html';
    }

    public function saveBook() {
        $paciente = new Paciente();// Recebe dados do formulário
        $paciente ->nome = $_POST['Nome'];
        $paciente ->cpf = $_POST['CPF'];
        $paciente ->data_nascimento = $_POST['Data de Nascimento'];
        $paciente ->sexo= $_POST['Sexo'];
        $paciente ->etnia = $_POST['Etnia'];
        $paciente ->pais = $_POST['País'];
        $paciente ->cidade = $_POST['Cidade'];
        $paciente ->estado = $_POST['Estado'];
        $paciente ->endereço = $_POST['Endereço'];
        $paciente ->telefone = $_POST['Telefone'];
        $paciente ->email = $_POST['E-mail'];

        // Salva no banco de dados
        if ($paciente->save()) {
            // Redireciona para a página de listagem
            header('Location: /list-books');
        } else {
            echo "Erro ao salvar o livro!";
        }
    }

    public function listBooks() {
        // Pega todos os livros do banco de dados
        $book = new Paciente();
        $books = $book->getAll();

        // Exibe a lista de livros
        require_once '../views/book_list.php';
    }
    public function home() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/paginas/paciente/../homepagePadrao.html';
    }
    
}
