<?php
$pdo = new PDO("mysql:dbname=test;host=localhost;", "root", "");

$sql = $pdo->query('SELECT * FROM usuarios'); //Comando query é para consultar

echo "Total ".$sql->rowCount(); // rowCount() Validar a quantidade de linhas

$dados = $sql->fetchAll(PDO::FETCH_ASSOC); //FetchAll é para pegar todos os dados

echo '<pre>';
print_r($dados);