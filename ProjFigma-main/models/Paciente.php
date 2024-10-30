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
    public $pais;
    public $cidade;
    public $estado;
    public $endereço;
    public $telefone;
    public $email;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (nome, cpf, data_nascimento, nacionalidade,sexo, etnia, pais, cidade, estado, endereço, telefone, email) VALUES (:nome, :cpf, :data_nascimento, :nacionalidade, :sexo, :etnia, :pais, :cidade, :estado, :endereço, :telefone, :email)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':nacionalidade', $this->nacionalidade);
        $stmt->bindParam(':sexo', $this->sexo);
        $stmt->bindParam(':etnia', $this->etnia);
        $stmt->bindParam(':pais', $this->pais);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':endereço', $this->endereço);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':email', $this->email);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}