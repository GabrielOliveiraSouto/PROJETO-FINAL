<?php

require_once '../database.php';

class Paciente {
    private $conn;
    private $table_name = "pacientes";
    public $nome;
    public $cpf;
    public $data_nascimento;
    public $sexo;
    public $etnia;
    public $pais;
    public $cidade;
    public $estado;
    public $endereco; // Renomeado para "endereco"
    public $telefone;
    public $email;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function savePaci() {
        $query = "INSERT INTO " . $this->table_name . " (nome, cpf, data_nascimento, sexo, etnia, pais, cidade, estado, endereco, telefone, email) VALUES (:nome, :cpf, :data_nascimento, :sexo, :etnia, :pais, :cidade, :estado, :endereco, :telefone, :email)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':sexo', $this->sexo);
        $stmt->bindParam(':etnia', $this->etnia);
        $stmt->bindParam(':pais', $this->pais);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':endereco', $this->endereco); // Atualizado aqui
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':email', $this->email);

        if ($stmt->execute()) {
            return true;
        } else{
        return false;
        }
    }
    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
  
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nome = :nome, cpf = :cpf, data_nascimento = :data_nascimento, sexo = :sexo, etnia = :etnia, pais = :pais, cidade = :cidade, estado = :estado, estado = :estado,  WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':sexo', $this->sexo);
        $stmt->bindParam(':etnia', $this->etnia);
        $stmt->bindParam(':pais', $this->pais);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':endereco', $this->endereco); // Atualizado aqui
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':email', $this->email);

        return $stmt->execute();
    }
}

