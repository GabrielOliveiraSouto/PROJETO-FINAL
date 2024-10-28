<?php

require_once '../config/database.php';

class Paciente{
    private $conn;
    private $table_name = "Paciente";
    public $nome;
    public $cpf;
    public $data_nascimento;
    public $nacionalidade;
    public $sexo;
    public $etnia;
    public $telefone;
    public $email;
    public $estado;
    public $cidade;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (nome, cpf, data_nascimento, nacionalidade, sexo, etnia, telefone, email, estado, cidade) VALUES (:nome, :cpf, :data_nascimento, :nascimento, :sexo, :etnia, :telefone, :email, :estado, :cidade)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':publication_year', $this->publication_year);
        $stmt->bindParam(':genre', $this->genre);
        $stmt->bindParam(':price', $this->price);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}

