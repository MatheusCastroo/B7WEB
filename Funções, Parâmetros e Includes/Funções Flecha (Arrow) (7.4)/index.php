<?php // Início do bloco de código PHP

// Definição de uma função anônima usando a sintaxe de arrow function e atribuída à variável $dizimo
$dizimo = fn($valor) => $valor * 0.1; // A função recebe um parâmetro $valor e retorna 10% desse valor

// Tenta imprimir a função, mas isso não exibirá diretamente o resultado
echo $dizimo; // Saída: 'Object of class Closure could not be converted to string'

?> // Fim do bloco de código PHP
