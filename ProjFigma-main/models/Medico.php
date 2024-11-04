<?php

require_once '../database.php';

class Medico {
    private $conn;
    private $table_name = "medicos";
    public $nome;
    public $cpf;
    public $data_nascimento;
    public $sexo;
    public $etnia;
    public $pais;
    public $unidade;
    public $crm;
    public $email_sp_medical_group;
    public $email; // Renomeado para "endereco"
    public $telefone;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function saveMed() {
        $query = "INSERT INTO " . $this->table_name . " (nome, cpf, data_nascimento, sexo, etnia, pais, unidade, crm, email_sp_medical_group, email, telefone) VALUES (:nome, :cpf, :data_nascimento, :sexo, :etnia, :pais, :unidade, :crm, :email_sp_medical_group, :email, :telefone)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':sexo', $this->sexo);
        $stmt->bindParam(':etnia', $this->etnia);
        $stmt->bindParam(':pais', $this->pais);
        $stmt->bindParam(':unidade', $this->unidade);
        $stmt->bindParam(':crm', $this->crm);
        $stmt->bindParam(':email_sp_medical_group', $this->email_sp_medical_group); // Atualizado aqui
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);

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

