<?php

$lista2 = ['nome 1', 'nome 2',  'nome 3', 'nome 4',  'nome 5'];
echo "TOTAL: " . count($lista2); // Contar a quantidade de item no array OBS: Contagem começa do zero.

/*====================================================================== */

$lista2 = ['Bonieky', 'Matheus', 'Lucas', 'Adrian', 'José', 'Francisca', 'Paulo'];
$aprovados = ['Bonieky', 'Matheus', 'Lucas'];

$reprovados = array_diff($lista2, $aprovados); //array_dif pega oque sobrou do primeiro array
echo '<br>';
print_r($reprovados);

/*====================================================================== */
$numeros = [10, 20, 24, 91, 18];

// Utilizando a função array_filter para filtrar elementos do array com base em uma condição
$filtrados = array_filter($numeros, function ($item) {

    if ($item < 30) { // Verifica se o elemento atual é menor que 30

        return true; // Se for menor que 30, mantém o elemento no array resultante

    } else {

        return false; // Se não for menor que 30, exclui o elemento do array resultante

    }
});

// Imprime o array resultante após o filtro
print_r($filtrados);

/*====================================================================== */

// Definição de um array de números
$numeros = [10, 20, 24, 91, 18];

// Utilizando a função array_map para aplicar uma operação em cada elemento do array
$dobrados = array_map(function($item2) {
    // Retorna o elemento multiplicado por 2
    return $item2 * 2;
}, $numeros);

// Imprime o array resultante após a aplicação da operação
print_r($dobrados);


