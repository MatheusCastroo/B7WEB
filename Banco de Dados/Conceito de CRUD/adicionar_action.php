<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {
    $sql->$pdo->prepare("SELECT * FROM usuarios where email = :email");//Validar se o e-mail ja exsite no banco
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0) { // Caso o e-mail não existe, não vai retornar nenhuma linha. Assim continuando o processo.

        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)"); //Inserir um nome e e-mail no banco
        $sql->bindValue(':name', $name); //Associar o valor do name para oq a váriavel $name receber
        $sql->bindValue(':email', $email);
        $sql->execute(); //Executar a inserção dos dados
        header("location: index.php"); //Após a execução, retornar a página index. 
    }
    else {
        header("location: adicionar.php"); 
    exit;
    }
} else {
    header("location: adicionar.php"); //Caso não for prenchido campo e-mail, retorna pra tela de adiconar.php
    exit;
}
