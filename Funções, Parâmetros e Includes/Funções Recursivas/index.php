<?php // Início do bloco de código PHP

// Definição da função 'dividir' que recebe um número como parâmetro
function dividir($numero){
    $metade = $numero / 2; // Calcula a metade do número
    echo $metade."<br/>"; // Exibe a metade do número seguida por uma quebra de linha

    // Verifica se a metade arredondada é maior que 0
    if(round($metade) > 0){
        dividir($metade); // Chamada recursiva da função 'dividir' com a metade do número
    }
}

// Chama a função 'dividir' com o número 100 como argumento
dividir(100);

?> // Fim do bloco de código PHP
