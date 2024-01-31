<?php
$texto = file_get_contents('texto.txt'); //Puxar o texto de um arquivo.

$texto = explode("\n", $texto); // Quebrar o texto por linha.
echo "Linhas: ".count($texto); // Validar a quantidade de linhas que tem o texto.
?>