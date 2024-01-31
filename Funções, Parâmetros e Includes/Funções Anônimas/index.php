<?php // Início do bloco de código PHP

// Definição de uma função anônima atribuída à variável $dizimo
$dizimo = function($valor){ // A função recebe um parâmetro chamado $valor
    return $valor * 0.1; // Retorna 10% do valor passado como argumento
};

// Chama a função anônima (closure) com o valor 82 e exibe o resultado
echo $dizimo(82); // Saída: 8.2 (10% de 82)

?> // Fim do bloco de código PHP
