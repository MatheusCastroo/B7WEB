<?php

$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
    ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9]
]; 

// Função utilizada como callback para contar a quantidade de homens no array $pessoas.
function contar_m($subtotal, $item) {
    if ($item['sexo'] === 'M') {
        $subtotal++;
    }
    return $subtotal;
}

// Utilização da função array_reduce com a função contar_m para obter o total de homens.

$total_m = array_reduce($pessoas, 'contar_m');  //função do array_reduce é: Reduzir um array para um único valor através de um processo iterativo.

// Função utilizada como callback para somar as notas dos homens no array $pessoas.
function soma_m($subtotal, $item) {
    if ($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}

// Utilização da função array_reduce com a função soma_m para obter a soma das notas dos homens.
$soma_m = array_reduce($pessoas, 'soma_m');

// Cálculo da média das notas dos homens.
$media_m = $soma_m / $total_m;

// Exibição dos resultados na tela.
echo "Total de homens " . $total_m . "</br>";
echo "Soma das notas dos homens " . $soma_m . "</br>";
echo "Média das notas dos homens " . $media_m . "</br>";