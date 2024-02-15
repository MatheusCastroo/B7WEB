<?php
class Usuario {
    private $id;
    private $nome;
    private $email;

    public function getId() {
        return $this->id;
    }
    public function setId($i) { 
        $this->id = trim($i); //Trim remove espaços vazios que pode ocorrer
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome ($n) {
        $this->nome = ucwords(trim($n)); //ucwords é para deixar as primeira letras maiusculas do nome
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($e) {
        $this->email = strtolower(trim($e)); //strtolower é para deixar os textos minusculos.
    }
}

interface UsuarioDAO {
    public function add(Usuario $u); //Objeto da classe usuario
    public function findAll();//Retornar uma lista de todos os usuarios
    public function findByEmail($email);
    public function findById($id); //Retornar um ID
    public function update(Usuario $u); // receber objeto de usuário
    public function delete ($id); //Deletar o ID
}
?>